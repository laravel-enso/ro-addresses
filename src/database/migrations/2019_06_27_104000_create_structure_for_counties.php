 <?php

use LaravelEnso\Permissions\app\Enums\Types;
use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForCounties extends Migration
{
    protected $permissions = [
        ['name' => 'core.addresses.countiesOptions', 'description' => 'Get counties for the select', 'type' => Types::Read, 'is_default' => false],
    ];
}
