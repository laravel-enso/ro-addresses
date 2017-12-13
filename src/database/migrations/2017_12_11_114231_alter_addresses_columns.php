<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddressesColumns extends Migration
{

    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {


            $table->renameColumn('sub_administrative_area', 'neighborhood');

            $table->dropColumn('administrative_area');
            $table->dropColumn('city');

            $table->integer('county_id')->unsigned()->index()->after('postal_area');
            $table->foreign('county_id')->references('id')->on('counties')
               ->onDelete('restrict')->onUpdate('restrict');

            $table->integer('locality_id')->unsigned()->index()->after('postal_area');
            $table->foreign('locality_id')->references('id')->on('localities')
               ->onDelete('restrict')->onUpdate('restrict');
        });
    }


    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {

            $table->dropForeign(['locality_id']);
            $table->dropForeign(['county_id']);

            $table->dropColumn('locality_id');
            $table->dropColumn('county_id');

            $table->string('city');
            $table->string('administrative_area')->nullable();

            $table->renameColumn('neighborhood', 'sub_administrative_area');
        });
    }
}
