<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kugoo_samokats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->smallInteger('capacity');
            $table->float('power');
			$table->smallInteger('speed');
			$table->smallInteger('hours');
			$table->mediumInteger('price');
			$table->mediumInteger('discount_price')->nullable();
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
        Schema::dropIfExists('kugoo_samokats');
    }
};
