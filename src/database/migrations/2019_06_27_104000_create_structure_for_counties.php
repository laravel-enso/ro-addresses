 <?php

    use LaravelEnso\Migrator\App\Database\Migration;

    class CreateStructureForCounties extends Migration
    {
        protected $permissions = [
            ['name' => 'core.addresses.countiesOptions', 'description' => 'Get counties for the select', 'is_default' => false],
        ];
    }
