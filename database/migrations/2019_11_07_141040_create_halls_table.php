<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('location');
            $table->string('capacity');
            $table->string('halltype');
            $table->string('eventtype');
           // $table->string('event_id')->unsigned();
            $table->string('amenities');
            $table->string('description');
            $table->string('price');
            $table->string('address');
            $table->string('image');
            $table->string('vendor');
            $table->timestamps();
           // $table->foreign('event_id')->refences('eventtype')->on('event_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('halls');

    }
}
