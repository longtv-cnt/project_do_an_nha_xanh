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
        Schema::create('khachhang', function (Blueprint $table) {
            $table->id();
           
            $table->bigInteger('makhach')->unsigned()->nullable()
            ->references('id')->on('users');
            $table->string('tenkhach',50);
            $table->string('SDT',11);
            $table->string('email',50);
            $table->string('diachi',200);
            $table->bigInteger('maloaikhach')->unsigned()->nullable()
            ->references('maloaikhach')->on('loaikhach')
            ->onDelete('set null')->onUpdate('set null');
            $table->bigInteger('idUser')->unsigned()
            ->nullable()->references('id')->on('users')->onDelete('set null')
            ->onUpdate('set null');
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
        Schema::dropIfExists('khachhang');
    }
};
