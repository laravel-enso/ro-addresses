<?php

namespace App\Importing\Importers;

use LaravelEnso\DataImport\app\Classes\Importers\AbstractImporter;
use LaravelEnso\RoAddresses\app\Exceptions\AddressImportException;
use LaravelEnso\RoAddresses\app\Models\County;
use LaravelEnso\RoAddresses\app\Models\Locality;

class LocalityUpdateImporter extends AbstractImporter
{
    public function run()
    {
        \DB::transaction(function () {
            $sheet = $this->getSheet('localitati');

            foreach ($sheet as $row) {
                $result = $this->importRow($row);
                $this->incSuccess();
            }
        });
    }

    private function importRow($row)
    {
        $locality = $this->findLocality($row);
        $this->updateAttributes($locality, $row);
        $locality->save();
    }

    private function findLocality($row)
    {
        $county = County::whereName($row['county'])->first();
        $queryBuilder = Locality::whereName($row['locality'])
            ->where('county_id', $county->id);

        if (!empty($row['township'])) {
            $queryBuilder->whereTownship($row['township']);
        }

        $localities = $queryBuilder->get();

        return $localities->first();
    }

    private function updateAttributes(Locality $locality, $row)
    {
        $locality->township = $row['township'];
        $locality->region = $row['region'];
        $locality->SIRUTA = $row['siruta'];
        $locality->lat = $row['lat'];
        $locality->long = $row['long'];
        $locality->is_active = $row['is_active'];
    }
}
