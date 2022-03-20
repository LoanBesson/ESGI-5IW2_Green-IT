<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorings', function (Blueprint $table) {
            $table->id();
            $table->text('libcom');
            $table->text('libdep');
            $table->text('libreg');
            $table->float('Pop');
            $table->float('score_global_departement');
            $table->float('score_global_epci');
            $table->float('score_global_region');
            $table->float('acces_a_l_information_departement');
            $table->float('acces_a_l_information_epci');
            $table->float('acces_a_l_information_region');
            $table->float('acces_aux_interfaces_numeriques_departement');
            $table->float('acces_aux_interfaces_numeriques_epci');
            $table->float('acces_aux_interfaces_numeriques_region');
            $table->float('competences_administratives_departement');
            $table->float('competences_administratives_epci');
            $table->float('competences_administratives_region');
            $table->float('competences_numeriques_scolaires_departement');
            $table->float('competences_numeriques_scolaires_epci');
            $table->float('competences_numeriques_scolaires_region');
        });

        Schema::create('zips', function (Blueprint $table) {
            $table->text('commune');
            $table->integer('zip');
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
};
