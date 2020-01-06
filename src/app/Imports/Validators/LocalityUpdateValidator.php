<?php

namespace LaravelEnso\RoAddresses\App\Imports\Validators;

use LaravelEnso\DataImport\App\Services\Validators\Validator;
use LaravelEnso\Helpers\App\Classes\Obj;
use LaravelEnso\RoAddresses\App\Models\County;
use LaravelEnso\RoAddresses\App\Models\Locality;

class LocalityUpdateValidator extends Validator
{
    public function run(Obj $row)
    {
        $county = County::whereName($row->county)->first();

        $localityCount = Locality::whereName($row->locality)
            ->where('county_id', $county->id)
            ->when($row->township !== null, fn ($query) => $query->whereTownship($row->township))
            ->count();

        if ($localityCount === 0) {
            $this->addError(__(
                'The locality is not present in the database'
            ));
        }

        if ($localityCount > 1) {
            $this->addError(__(
                'There are more localities that match the criteria'
            ));
        }
    }
}
