<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('model')->nullable();
            $table->string('mserial')->nullable();
            $table->string('gserial')->nullable();
            $table->string('ram')->nullable();
            $table->string('rom')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('status')->nullable();
            $table->longText('others')->nullable();
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
        Schema::dropIfExists('laptops');
    }
}
