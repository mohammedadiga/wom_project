<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Foreignkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('wallets', function (Blueprint $table) {
        //     $table->foreign('data_id')->references('id')->on('data')->onUpdate('cascade')->onDelete('cascade');
        // });
        // Schema::create('wallets', function (Blueprint $table) {
        //     $table->foreign('data_id')->references('id')->on('data')->onUpdate('cascade')->onDelete('cascade');
        // });
        // Schema::create('charts', function (Blueprint $table) {
        //     $table->foreign('data_id')->references('id')->on('data')->onUpdate('cascade')->onDelete('cascade');
        // });
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
