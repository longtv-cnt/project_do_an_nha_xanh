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
            //
            $table->binary('xetduyet')->nullable()->default(0)->change();
            $table->binary('nhaxanh')->nullable()->default(rand(0,1))->change();
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
