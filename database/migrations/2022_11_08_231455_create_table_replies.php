<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReplies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_replies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("comment_id");
            $table->unsignedBigInteger("user_id");
            $table->string("reply");
            $table->date("time");
            $table->timestamps();
        });

        Schema::table('table_replies', function (Blueprint $table) {
            $table->foreign('comment_id')->references('id')->on('table_comments')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_replies');
    }
}
