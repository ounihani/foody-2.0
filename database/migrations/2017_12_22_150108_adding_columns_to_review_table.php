<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingColumnsToReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('reviews', function (Blueprint $table) {
          $table->integer('user_id');
          $table->integer('store_id');
          $table->integer('rating');
          $table->string('text');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('reviews', function (Blueprint $table) {
          $table->dropColumn('user_id');
          $table->dropColumn('store_id');
          $table->dropColumn('rating');
          $table->dropColumn('text');
          });
    }
}
