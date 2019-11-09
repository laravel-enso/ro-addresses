<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalitiesTable extends Migration
{
    public function up()
    {
        Schema::create('localities', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('county_id')->unsigned()->index();
            $table->foreign('county_id')->references('id')->on('counties')
                ->onUpdate('no action')->onDelete('no action');

            $table->string('township')->nullable();
            $table->string('name');
            $table->string('siruta')->nullable();

            $table->float('lat', 10, 6)->nullable();
            $table->float('long', 10, 6)->nullable();

            $table->boolean('is_active');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('localities');
    }
}
