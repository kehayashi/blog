<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lead extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('lead', function ($table) {
              $table->increments('lead_id');
              $table->string('nome');
              $table->string('sobrenome');
              $table->string('email')->unique();
              $table->string('empresa');
              $table->string('cargo');
              $table->string('data_hora');
              $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
