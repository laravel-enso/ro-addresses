<?php

use Illuminate\Database\Seeder;
use LaravelEnso\RoAddresses\app\Models\County;

class CountySeeder extends Seeder
{
    const CountiesJSON = __DIR__.'/../../vendor/laravel-enso/roaddresses/src/database/counties.json';

    public function run()
    {
        $this->counties()
            ->each(function ($county) {
                County::create($county);
            });
    }

    public function counties()
    {
        $counties = json_decode(\File::get(self::CountiesJSON), true);

        return collect($counties);
    }
}
