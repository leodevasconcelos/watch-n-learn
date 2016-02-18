<?php

use Illuminate\Database\Migrations\Migration;

class RenameLikesTableToFavorites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('likes', 'favorites');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('favorites', 'likes');
    }
}
