<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjoutColonneEtatEtDescriptionDansLaTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_posts', function (Blueprint $table) {
            $table->mediumText('r_description')->nullable()->after('r_libelle');
            $table->boolean('r_etat')->default(false)->after('r_description');
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
            $table->dropColumn('r_etat');
            $table->dropColumn('r_description');
        });
    }
}
