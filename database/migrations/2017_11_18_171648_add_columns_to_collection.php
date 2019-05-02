<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::table('collections', function (Blueprint $table) {
        $table->string('name');
        $table->string('description');
        $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::table('collections', function (Blueprint $table) {
        $table->dropColumn('name');
        $table->dropColumn('description');
        $table->dropColumn('image');
      });
    }
}
