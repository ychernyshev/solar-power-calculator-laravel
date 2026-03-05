<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataEntryLineModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_entry_line_models', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('power', ['200', '400', '600', '800'])->default('600');
            $table->integer('morning_data_charge');
            $table->float('morning_data_price');
            $table->integer('afternoon_data_charge')->default(0);
            $table->float('afternoon_data_price')->default(0);
            $table->integer('evening_data_charge');
            $table->float('evening_data_price');
            $table->boolean('default_day_energy_formula')->default(false);
            $table->float('full_day_power')->nullable();
            $table->float('full_day_cost')->nullable();
            $table->float('power_tariff');
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
        Schema::dropIfExists('data_entry_line_models');
    }
}
