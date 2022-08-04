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
        Schema::table('sanpham_bds', function (Blueprint $table) {
            $table->foreign('maduan')->references('maduan')->on('du_an')->onDelete('set null')->onUpdate('set null');
            $table->foreign('maloai')->references('maloai')->on('loaisp_bds')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sanpham_bds', function (Blueprint $table) {
            //
        });
    }
};
