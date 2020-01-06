 <?php

use LaravelEnso\Migrator\App\Database\Migration;
use LaravelEnso\Permissions\app\Enums\Types;

class CreateStructureForCounties extends Migration
{
    protected $permissions = [
        ['name' => 'core.addresses.countiesOptions', 'description' => 'Get counties for the select', 'type' => Types::Read, 'is_default' => false],
    ];
}
