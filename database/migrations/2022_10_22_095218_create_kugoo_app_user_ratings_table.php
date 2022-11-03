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
        Schema::create('kugoo_app_user_ratings', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('user_ip')->unique();
            $table->unsignedFloat('mark');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kugoo_app_user_ratings');
    }
};
