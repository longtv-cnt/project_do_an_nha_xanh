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
        Schema::create('tintuc', function (Blueprint $table) {

            $table->unsignedBigInteger('loaitin')->nullable()
            ->references('id')->on('loaitintuc')->onDelete('set null')->onUpdate('set null');
            $table->unsignedBigInteger('manguoidang')->nullable()
            ->references('id')->on('users')->onDelete('set null')->onUpdate('set null');
            $table->string('noidung',255);
            $table->dateTime('ngaydang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tintuc');
    }
};
