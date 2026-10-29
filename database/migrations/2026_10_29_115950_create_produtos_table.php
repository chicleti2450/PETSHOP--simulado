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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->string('marca');
            $table->string('categoria');
            $table->decimal('Pcusto', 10,2);
            $table->decimal('Pvenda', 10,2);
            $table->integer('quantidade')->default(0);
            $table->integer('estoqueMin')->default(0);
            $table->date('prazo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
