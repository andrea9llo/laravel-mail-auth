<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('posts', function (Blueprint $table){
        $table-> bigInteger('category_id') -> unsigned() -> index();
        $table-> foreign('category_id', 'posts_categories') -> references('id') -> on('categories');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('posts', function (Blueprint $table){
        $table-> dropForeign('posts_categories');
        $table-> dropColumn('category_id');
      });
    }
}
