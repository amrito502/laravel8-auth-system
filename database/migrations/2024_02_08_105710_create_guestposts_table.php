<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guestposts', function (Blueprint $table) {
            $table->id();
            $table->mediumText('title')->nullable();
            $table->string('email')->nullable();
            $table->longText('post_rules')->nullable();

            $table->text('guest_post_title')->nullable();
            $table->mediumText('slug')->nullable();
            $table->text('image')->nullable();
            $table->longText('guest_post_description')->nullable();

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
        Schema::dropIfExists('guestposts');
    }
}
