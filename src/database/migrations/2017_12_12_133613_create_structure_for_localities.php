<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForLocalities extends StructureMigration
{
    protected $permissionGroup = [
        'name' => 'core.addresses', 'description' => 'Addresses group',
    ];

    protected $permissions = [
        ['name' => 'core.addresses.localitiesSelectOptions', 'description' => 'Get localities for the select', 'type' => 0, 'is_default' => false],
    ];
}
