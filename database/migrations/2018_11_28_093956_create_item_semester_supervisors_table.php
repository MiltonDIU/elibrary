<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSemesterSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_semester_supervisors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->integer('semester_id')->unsigned()->nullable();
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('set null');
            $table->integer('supervisor_id')->unsigned()->nullable();
            $table->foreign('supervisor_id')->references('id')->on('supervisors')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_semester_supervisors');
    }
}
