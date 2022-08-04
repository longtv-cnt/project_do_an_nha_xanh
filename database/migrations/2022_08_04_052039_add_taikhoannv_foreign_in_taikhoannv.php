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
        Schema::table('taikhoannv', function (Blueprint $table) {
            $table->foreign('manhanvien')->references('maNV')->on('nhanvien')->onDelete('set null')->onUpdate('set null');
            $table->foreign('quyenhan')->references('maloai')->on('loaiquyenhan')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('taikhoannv', function (Blueprint $table) {
            //
        });
    }
};
