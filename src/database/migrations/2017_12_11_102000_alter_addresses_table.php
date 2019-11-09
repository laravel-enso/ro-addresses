<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddressesTable extends Migration
{
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropColumn(['administrative_area', 'city', 'sub_administrative_area']);
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->integer('county_id')->unsigned()->index()->nullable()
                ->after('country_id');
            $table->foreign('county_id')->references('id')->on('counties')
                ->onDelete('restrict')->onUpdate('restrict');

            $table->integer('locality_id')->unsigned()->index()->nullable()
                ->after('county_id');
            $table->foreign('locality_id')->references('id')->on('localities')
                ->onDelete('restrict')->onUpdate('restrict');

            $table->tinyInteger('sector')->nullable()->after('locality_id');

            $table->string('neighbourhood')->nullable()->after('sector');
        });
    }

    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign(['locality_id']);
            $table->dropForeign(['county_id']);

            $table->dropColumn('locality_id');
            $table->dropColumn('county_id');
            $table->dropColumn('neighbourhood');

            $table->string('city');
            $table->string('administrative_area')->nullable();
            $table->string('sub_administrative_area')->nullable();
        });
    }
}
