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
        Schema::table('taikhoankhach', function (Blueprint $table) {
            $table->foreign('makhach')->references('makhach')->on('khachhang')->onDelete('set null')->onUpdate('set null');
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
        Schema::table('taikhoankhach', function (Blueprint $table) {
            //
        });
    }
};
