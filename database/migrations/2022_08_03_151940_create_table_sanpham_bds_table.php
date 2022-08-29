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
            $table->id();
            $table->unsignedBigInteger('maduan')->nullable()->references('maduan')->on('duan')
            ->onDelete('set null')->onUpdate('set null');
            $table->unsignedBigInteger('maloai')->nullable()->references('id')->on('loaisp_bds')
            ->onDelete('set null')->onUpdate('set null');
            $table->string('tensp',50);
            $table->double('giatien',10,2)->nullable();
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
