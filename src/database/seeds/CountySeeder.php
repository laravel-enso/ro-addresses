<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use LaravelEnso\RoAddresses\app\Models\County;

class CountySeeder extends Seeder
{
    const CountiesJSON = __DIR__.'/../../vendor/laravel-enso/ro-addresses/src/database/counties.json';

    public function run()
    {
        $this->counties()->each(fn($county) => (
            County::create($county + ['is_active' => true])
        ));
    }

    public function counties()
    {
        $counties = json_decode(File::get(self::CountiesJSON), true);

        return collect($counties);
    }
}
