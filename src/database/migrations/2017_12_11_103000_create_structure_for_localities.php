<?php

use LaravelEnso\Migrator\App\Database\Migration;
use LaravelEnso\Permissions\app\Enums\Types;

class CreateStructureForLocalities extends Migration
{
    protected $permissions = [
        ['name' => 'core.addresses.localitiesOptions', 'description' => 'Get localities for the select', 'type' => Types::Read, 'is_default' => false],
    ];
}
