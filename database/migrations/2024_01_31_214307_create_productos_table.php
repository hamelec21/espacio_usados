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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->string('foto5');
            $table->unsignedBigInteger('categorias_id');
            $table->foreign('categorias_id')->references('id')->on('categorias')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->unsignedBigInteger('estado_productos_id');
            $table->foreign('estado_productos_id')->references('id')->on('estado_productos')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->unsignedBigInteger('tipo_entregas_id');
            $table->foreign('tipo_entregas_id')->references('id')->on('tipo_entregas')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->unsignedBigInteger('marcas_id');
            $table->foreign('marcas_id')->references('id')->on('marcas')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->unsignedBigInteger('modelos_id');
            $table->foreign('modelos_id')->references('id')->on('modelos')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->unsignedBigInteger('estado_publicaciones_id');
            $table->foreign('estado_publicaciones_id')->references('id')->on('estado_publicaciones')
            ->onDelete('no action')
            ->onUpdate('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
