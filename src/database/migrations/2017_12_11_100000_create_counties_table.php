<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountiesTable extends Migration
{
    public function up()
    {
        Schema::create('counties', function (Blueprint $table) {
            $table->increments('id');

            $table->string('abbreviation', 2);
            $table->string('name');

            $table->boolean('is_active');

            $table->integer('created_by')->unsigned()->index()->nullable();
            $table->foreign('created_by')->references('id')->on('users')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('counties');
    }
}
