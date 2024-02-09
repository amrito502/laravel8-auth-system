<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable();
            $table->mediumText('title')->nullable();
            $table->longText('description')->nullable();
            $table->text('image')->nullable();
            $table->text('slug')->nullable();
            $table->mediumText('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('mete_keyword')->nullable();
            $table->tinyInteger('status')->default('0');
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
        Schema::dropIfExists('heroes');
    }
}
