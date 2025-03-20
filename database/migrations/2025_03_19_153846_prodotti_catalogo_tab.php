<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration {
    public function up() {
        Schema::create('prodotti', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('immagine')->nullable();
            $table->text('descrizione')->nullable();
            $table->text('note_tecniche_uso')->nullable();
            $table->text('modalita_installazione')->nullable();
            $table->timestamps();
        });
    }
 
    public function down() {
        Schema::dropIfExists('prodotti');
    }
};