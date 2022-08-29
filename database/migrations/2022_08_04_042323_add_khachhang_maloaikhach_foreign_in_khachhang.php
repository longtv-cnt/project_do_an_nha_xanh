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
        Schema::table('khachhang', function (Blueprint $table) {

            $table->unsignedBigInteger('maloaikhach')->nullable();
            $table->foreign('maloaikhach')->references('id')->on('loaikhach')
                ->onDelete('set null')->onUpdate('set null');
                $table->bigInteger('makhachhang')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
                

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('khachhang', function (Blueprint $table) {
            //
        });
    }
};
