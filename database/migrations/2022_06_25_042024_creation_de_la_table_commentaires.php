<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreationDeLaTableCommentaires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_commentaires', function (Blueprint $table) {
            $table->id();
            $table->mediumText('r_description');
            $table->timestamps();
            $table->unsignedBigInteger('r_post');
            $table->foreign('r_post')->references('id')->on('t_posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_commentaires');
    }
}
