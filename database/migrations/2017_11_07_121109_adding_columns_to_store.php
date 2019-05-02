<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingColumnsToStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::table('stores', function (Blueprint $table) {
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cover')->unique;
            $table->string('logo');
            $table->integer('phone_number');
            $table->string('address');
            $table->decimal('longitude', 9, 6);
            $table->decimal('latitude', 9, 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('stores', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('cover');
            $table->dropColumn('logo');
            $table->dropColumn('phone_number');
            $table->dropColumn('address');
            $table->dropColumn('longitude');
            $table->dropColumn('latitude');
        });
    }
}
