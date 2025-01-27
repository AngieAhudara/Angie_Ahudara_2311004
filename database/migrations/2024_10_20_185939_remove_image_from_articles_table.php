<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveImageFromArticlesTable extends Migration
{
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }
}