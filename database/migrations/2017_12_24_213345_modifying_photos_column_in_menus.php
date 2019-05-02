<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyingPhotosColumnInMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('menus', function (Blueprint $table) {
      $table->renameColumn('photos', 'photo');
      $table->integer('store_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->renameColumn('photo', 'photos');
        $table->dropColumn('store_id');
    }
}
