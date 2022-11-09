<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRetweets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_retweets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->string('retweet_msg');
            $table->unsignedBigInteger('tweet_id');
            $table->unsignedBigInteger('retweet_id');
            $table->timestamps();
        });

        Schema::table('table_retweets', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('table_posts')->onDelete('cascade');
            $table->foreign('tweet_id')->references('id')->on('table_tweets')->onDelete('cascade');
            $table->foreign('retweet_id')->references('id')->on('table_retweets')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_retweets');
    }
}
