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
        Schema::table('phanhoi', function (Blueprint $table) {
            $table->bigInteger('masp')->after('makhach')->nullable()
            ->references('id')->on('sanpham_bds')
            ->onDelete('set null')->onUpdate('set null');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phanhoi', function (Blueprint $table) {
            //
            $table->dropColumn('masp');
        });
    }
};
