<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notify_for');
            $table->unsignedBigInteger('notify_from');
            $table->string("type");
            $table->string("target");
            $table->date("time");
            $table->timestamps();
        });

        Schema::table('table_notifications', function (Blueprint $table) {
            $table->foreign('notify_for')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('notify_from')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_notifications');
    }
}
