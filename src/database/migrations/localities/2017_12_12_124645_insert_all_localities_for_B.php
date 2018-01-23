<?php

use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $now = now();
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (4, "","Bucuresti", "'.$now.'", "'.$now.'")
        ;';
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = 'DELETE FROM localities WHERE county_id=4;';
        DB::connection()->getPdo()->exec($sql);
    }
}
