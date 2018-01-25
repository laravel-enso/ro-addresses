<?php
namespace App\Importing\Validators;

use LaravelEnso\DataImport\app\Classes\Reporting\Issue;
use LaravelEnso\DataImport\app\Classes\Validators\AbstractValidator;
use LaravelEnso\RoAddresses\app\Models\County;
use LaravelEnso\RoAddresses\app\Models\Locality;

class LocalityUpdateValidator extends AbstractValidator
{

    const MISSING_LOCALITY = 'localitate lipsa';
    const UNCERTAIN_LOCALITY = 'localitate incerta';

    public function run()
    {

        $sheet = $this->sheets->first();

        foreach ($sheet as $index => $row) {
            $this->check($sheet->getTitle(), $row, $index + 1);
        }
    }

    public function check(String $sheetName, $row, $rowNumber)
    {

        $county = County::whereName($row['county'])->first();
        $queryBuilder = Locality::whereName($row['locality'])
            ->where('county_id', $county->id);

        if(!empty($row['township'])) {
            $queryBuilder->whereTownship($row['township']);
        }

        $localities = $queryBuilder->get();
        $this->checkValidity($sheetName, $rowNumber, $localities, $row['locality']);
    }

    private function checkValidity(String $sheetName, $rowNumber, $localities, String $localityName)
    {
        if($localities->count() === 0) {
            $this->addIssue($sheetName,
                LocalityUpdateValidator::MISSING_LOCALITY,
                $rowNumber,
                'locality',
                $localityName);
        }

        if($localities->count() > 1) {
            $this->addIssue($sheetName,
                LocalityUpdateValidator::UNCERTAIN_LOCALITY,
                $rowNumber,
                'locality',
                $localityName);
        }
    }

    private function addIssue(string $sheetName, string $category, int $rowNumber = null, string $column = null, $value = null)
    {
        $issue = new Issue([
            'rowNumber' => $rowNumber,
            'column'    => $column,
            'value'     => $value,
        ]);

        $this->summary->addContentIssue($issue, $category, $sheetName);
    }
}