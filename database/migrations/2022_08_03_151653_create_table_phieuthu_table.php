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
        Schema::create('phieuthu', function (Blueprint $table) {
            $table->id('maphieu');
            $table->float('sotiennop');
            $table->string('lydo',200);
            $table->unsignedBigInteger('makhach')->nullable();
            $table->dateTime('ngaytao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieuthu');
    }
};
