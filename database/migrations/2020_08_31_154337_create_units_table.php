<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->foreignId('plant_id');
            $table->string('sn_unit')->unique();
            $table->string('model_unit');
            $table->text('desc');
            $table->string('no_unit');
            $table->text('lokasi_unit');
            $table->string('kota');
            $table->string('hoo');
            $table->string('smu');
            $table->string('old_smu')->nullable();
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('units');
    }
}
