<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->longText('tweet_text');
            $table->timestamp('published_at')->nullable();
            // $table->dateTime('published_at');
            $table->bigInteger('like_cnt');
            $table->bigInteger('reply_cnt');
            $table->string('photo')->nullable();
            $table->bigInteger('photo_id')->nullable();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweets');
    }
}
