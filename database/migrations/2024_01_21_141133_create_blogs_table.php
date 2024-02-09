<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('id');
            $table->mediumText('title');
            $table->mediumText('slug');
            $table->text('image');
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->text('comment')->nullable();
            $table->mediumText('meta_title');
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
        Schema::dropIfExists('blogs');
    }
}
