<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_actus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pseudo');
            $table->string('title');
            $table->string('subtitle');
            $table->string('categorie');
            $table->text('content');
            $table->string('picture');
            // $table->integer('publish');
            // $table->integer('published_by');
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
        Schema::dropIfExists('news');
    }
}
