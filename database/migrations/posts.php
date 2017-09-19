<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class postsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function ($table) {
            $table->increments('post_id');
            $table->text('titulo');
            $table->text('descricao');
            $table->string('data_hora');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
