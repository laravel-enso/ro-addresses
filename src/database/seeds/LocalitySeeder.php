<?php

use Illuminate\Database\Seeder;

class LocalitySeeder extends Seeder
{
    const Localities = __DIR__.'/../../vendor/laravel-enso/roaddresses/src/database/localities';

    public function run()
    {
        collect(\File::files(self::Localities))
            ->each(function ($file) {
                \DB::table('localities')->insert(
                        $this->localities($file)
                    );
            });
    }

    public function localities($file)
    {
        $fileName = self::Localities.DIRECTORY_SEPARATOR.$file->getFileName();
        $localities = json_decode(\File::get($fileName), true);

        return collect($localities)->toArray();
    }
}
