 <?php

use LaravelEnso\Migrator\app\Database\Migration;

class CreateStructureForCounties extends Migration
{
    protected $permissions = [
        ['name' => 'core.addresses.countiesOptions', 'description' => 'Get counties for the select', 'type' => 0, 'is_default' => false],
    ];
}
