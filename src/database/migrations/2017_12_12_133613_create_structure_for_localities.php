<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForLocalities extends StructureMigration
{
    protected $permissionGroup = [
        'name' => 'addresses', 'description' => 'Addresses group',
    ];

    protected $permissions = [

        ['name' => 'addresses.localitiesSelectOptions', 'description' => 'Get localities for the select', 'type' => 0, 'default' => false],

    ];
}
