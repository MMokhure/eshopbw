<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printers', function (Blueprint $table) {
            $table->id();
            $table->string('model')->nullable();
            $table->string('mserial')->nullable();
            $table->string('gserial')->nullable();
            $table->string('tray')->nullable();
            $table->string('cartridge')->nullable();
            $table->longText('printer_type')->nullable();
            $table->string('inktype')->nullable();
            $table->string('type')->nullable();
            $table->string('interfarce')->nullable();
            $table->string('others')->nullable();
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('printers');
    }
}
