<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForLocalities extends Migration
{
    protected $permissions = [
        ['name' => 'core.addresses.localitiesOptions', 'description' => 'Get localities for the select', 'is_default' => false],
    ];
}
