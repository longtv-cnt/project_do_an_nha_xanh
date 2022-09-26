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
            $table->string('sdt_lienhe',11)->nullable()->change();
            $table->string('slug')->after('tensp')->nullable();
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
            $table->dropColumn('sdt_lienhe');
            $table->dropColumn('slug');
        });
    }
};
