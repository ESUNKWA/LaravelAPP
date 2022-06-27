<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjoutRubImageEtContrainteUniciteRLibelleSurTProduits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_produits', function (Blueprint $table) {
            $table->string('r_image')->after('r_description')->nullable();
            $table->unique('r_libelle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_produits', function (Blueprint $table) {
            $table->dropColumn('r_image');
            $table->dropUnique('t_produits_r_libelle_unique');
        });
    }
}
