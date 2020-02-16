<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_category_id')->unsigned();
            $table->string('namespace')->index();
            $table->string('controller')->index();
            $table->enum('method', ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'])->index();
            $table->string('action')->index();
            $table->string('displayName',150)->nullable();
            $table->timestamps();
            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
