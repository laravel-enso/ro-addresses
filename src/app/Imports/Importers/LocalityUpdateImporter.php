<?php

namespace App\Importing\Importers;

use LaravelEnso\DataImport\app\Classes\Importers\AbstractImporter;
use LaravelEnso\RoAddresses\app\Models\County;
use LaravelEnso\RoAddresses\app\Models\Locality;

class LocalityUpdateImporter extends AbstractImporter
{
    public function run()
    {
        \DB::transaction(function () {
            $this->rowsFromSheet('localitati')
                ->each(function ($row) {
                    $this->importRow($row);
                });
        });
    }

    private function importRow($row)
    {
        $this->locality($row)->update($row);
        $this->incSuccess();
    }

    private function locality($row)
    {
        $query = Locality::whereName($row['locality'])
            ->where('county_id', $this->countyId($row));

        if (!empty($row['township'])) {
            $query->whereTownship($row['township']);
        }

        return $query->first();
    }

    private function countyId($row)
    {
        return County::whereName($row['county'])->first(['id'])->id;
    }
}
