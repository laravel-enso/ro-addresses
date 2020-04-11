<?php

use Illuminate\Database\Seeder;
use LaravelEnso\Helpers\App\Classes\JsonReader;
use LaravelEnso\RoAddresses\App\Models\County;

class CountySeeder extends Seeder
{
    private const Counties = __DIR__.'/../../vendor/laravel-enso/ro-addresses/src/database/counties.json';

    public function run()
    {
        $this->counties()
            ->map(fn ($county) => $county + ['is_active' => true])
            ->each(fn ($county) => County::create($county));
    }

    public function counties()
    {
        return (new JsonReader(self::Counties))->collection();
    }
}
