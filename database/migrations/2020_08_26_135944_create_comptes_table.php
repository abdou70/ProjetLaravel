<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Numero-Compte');
            $table->string('Numero-Agence');
            $table->string('Cle-Rib');
            $table->string('Ninea');
            $table->dateTime('Date-Ouverture');
            $table->string('Frais-Ouverture');
            $table->string('Montant-Initial');
            $table->integer('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients');
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
        Schema::dropIfExists('comptes');
    }
}
