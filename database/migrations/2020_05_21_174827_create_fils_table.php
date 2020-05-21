<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("idUser");
            $table->string("type");
            $table->integer("newsUser");
            $table->integer("newsValue");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fils');
    }
}
