<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForLocalities extends StructureMigration
{
    protected $permissionGroup = [
        'name' => 'localities', 'description' => 'Localities group',
    ];

    protected $permissions = [

        ['name' => 'localities.getOptionList', 'description' => 'Get localities for the select', 'type' => 0, 'default' => false],

    ];
}
