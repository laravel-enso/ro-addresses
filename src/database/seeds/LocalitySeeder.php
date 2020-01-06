<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LocalitySeeder extends Seeder
{
    const Localities = __DIR__.'/../../vendor/laravel-enso/ro-addresses/src/database/localities';

    public function run()
    {
        (new Collection(File::files(self::Localities)))
            ->each(fn ($file) => DB::table('localities')->insert(
                $this->localities($file)
            ));
    }

    public function localities($file): array
    {
        $fileName = self::Localities.DIRECTORY_SEPARATOR.$file->getFileName();
        $localities = json_decode(File::get($fileName), true);

        return (new Collection($localities))
            ->map(fn ($locality) => ['is_active' => true] + $locality)
            ->toArray();
    }
}
