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
        Schema::create('taikhoankhach', function (Blueprint $table) {
            $table->id();
            $table->string('username',255);
            $table->string('password',60);
            $table->unsignedBigInteger('makhach')->nullable();
            $table->unsignedBigInteger('quyenhan')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taikhoankhach');
    }
};
