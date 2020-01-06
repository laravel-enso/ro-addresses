<?php

use LaravelEnso\Permissions\app\Enums\Types;
use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForLocalities extends Migration
{
    protected $permissions = [
        ['name' => 'core.addresses.localitiesOptions', 'description' => 'Get localities for the select', 'type' => Types::Read, 'is_default' => false],
    ];
}
