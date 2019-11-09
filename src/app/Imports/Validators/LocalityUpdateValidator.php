<?php

namespace LaravelEnso\RoAddresses\app\Imports\Validators;

use LaravelEnso\DataImport\app\Services\Validators\Validator;
use LaravelEnso\Helpers\app\Classes\Obj;
use LaravelEnso\RoAddresses\app\Models\County;
use LaravelEnso\RoAddresses\app\Models\Locality;

class LocalityUpdateValidator extends Validator
{
    public function run(Obj $row)
    {
        $county = County::whereName($row->county)->first();

        $localityCount = Locality::whereName($row->locality)
            ->where('county_id', $county->id)
            ->when($row->township !== null, function ($query) use ($row) {
                $query->whereTownship($row->township);
            })->count();

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
