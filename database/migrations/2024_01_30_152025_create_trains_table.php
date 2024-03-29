<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',30);
            $table->string('stazione_partenza',30);
            $table->string('stazione_arrivo',30);
            $table->time('orario_partenza');
            $table->date('giorno_partenza');
            $table->time('orario_arrivo');
            $table->date('giorno_arrivo');
            $table->BigInteger('codice_treno')->unsigned()->nullable();
            $table->TinyInteger('n_carrozze')->unsigned()->nullable();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
