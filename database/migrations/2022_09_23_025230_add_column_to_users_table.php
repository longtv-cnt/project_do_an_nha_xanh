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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('social_id')->nullable();
            $table->string('social_type')->nullable();
            $table->string('social_avatar')->nullable();
            // get avatar from assets folder

            $table->string('avatar')->nullable()->default(public_path('uploads/avatar/default.jpg'));
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('social_id');
            $table->dropColumn('social_type');
            $table->dropColumn('social_avatar');
            $table->dropColumn('avatar');
            $table->dropColumn('slug');

        });

    }
};
