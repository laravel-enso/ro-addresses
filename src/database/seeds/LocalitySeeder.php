<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LocalitySeeder extends Seeder
{
    const Localities = __DIR__.'/../../vendor/laravel-enso/ro-addresses/src/database/localities';

    public function run()
    {
        collect(File::files(self::Localities))
            ->each(function ($file) {
                DB::table('localities')->insert(
                        $this->localities($file)
                    );
            });
    }

    public function localities($file)
    {
        $fileName = self::Localities.DIRECTORY_SEPARATOR.$file->getFileName();
        $localities = json_decode(File::get($fileName), true);

        return collect($localities)->map(function ($locality) {
            $locality['is_active'] = true;

            return $locality;
        })->toArray();
    }
}
