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
        Schema::table('du_an', function (Blueprint $table) {
            //
            $table->integer('dientich')->after('chudautu')->nullable();
            $table->string('vitri')->after('dientich')->nullable();
            $table->string('mota')->nullable();
            $table->date('ngaykhoicong')->nullable();
            $table->date('ngayketthuc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('duan', function (Blueprint $table) {
            //
        });
    }
};
