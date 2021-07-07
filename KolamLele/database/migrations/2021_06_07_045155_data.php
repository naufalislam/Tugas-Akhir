<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Data extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->integer('kolam');
            $table->float('ph', 4, 2);
            $table->float('suhu1', 4, 2);
            $table->float('suhu2', 4, 2);
            $table->float('suhu3', 4, 2);
            $table->float('suhu4', 4, 2);
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
