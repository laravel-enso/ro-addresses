<?php

use LaravelEnso\Migrator\app\Database\Migration;

class CreateStructureForLocalities extends Migration
{
    protected $permissionGroup = [
        'name' => 'core.addresses', 'description' => 'Addresses group',
    ];

    protected $permissions = [
        ['name' => 'core.addresses.localitiesOptions', 'description' => 'Get localities for the select', 'type' => 0, 'is_default' => false],
    ];
}
