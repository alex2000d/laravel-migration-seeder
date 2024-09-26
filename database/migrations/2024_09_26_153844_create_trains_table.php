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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 255);
            $table->string('stazione_di_partenza', 50);
            $table->string('stazione_di_arrivo', 50);
            $table->datetime('orario_di_partenza');
            $table->datetime('orario_di_arrivo');
            $table->string('codice_treno', 30);
            $table->integer('numero_carrozze');
            $table->boolean('in_orario',default: true);
            $table->boolean('cancellato', default: false);
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
        Schema::dropIfExists('trains');
    }
};
