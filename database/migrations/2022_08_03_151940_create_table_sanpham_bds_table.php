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
        Schema::create('sanpham_bds', function (Blueprint $table) {
            $table->id('masanpham');
            $table->unsignedBigInteger('maduan')->nullable();
            $table->unsignedBigInteger('maloai')->nullable();
            $table->string('tensp',50);
            $table->text('anhsp');
            $table->string('huong',20);
            $table->float('chieudai');
            $table->float('chieurong');
            $table->integer('sophongtam');
            $table->integer('sophongngu');
            $table->binary('xetduyet');
            $table->string('tinhtrang',20);
            $table->text('diachi');
            $table->binary('nhaxanh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanphan_bds');
    }
};
