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
        Schema::create('kugoo_samokat_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId("kugoo_samokat_id")->constrained("kugoo_samokats")->onUpdate('cascade')->onDelete('cascade');
			$table->string("image");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kugoo_samokat_images');
    }
};
