<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SupRubRCommentaireDeLaTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_posts', function (Blueprint $table) {
            $table->dropColumn('r_commentaire');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_posts', function (Blueprint $table) {
            $table->string('r_commentaire')->after('r_libelle')->nullable();
        });
    }
}
