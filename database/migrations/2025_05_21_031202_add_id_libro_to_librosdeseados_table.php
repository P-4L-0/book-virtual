<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdLibroToLibrosdeseadosTable extends Migration
{
    public function up()
    {
        Schema::table('librosdeseados', function (Blueprint $table) {
            // Agregar la columna id_libro
            $table->unsignedBigInteger('id_libro')->after('user_id');

            // Crear índice para id_libro
            $table->index('id_libro');

            // Agregar llave foránea con borrado en cascada
            $table->foreign('id_libro')
                ->references('id')
                ->on('libros')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('librosdeseados', function (Blueprint $table) {
            // Para revertir, primero eliminar la llave foránea
            $table->dropForeign(['id_libro']);

            // Luego eliminar el índice
            $table->dropIndex(['id_libro']);

            // Finalmente eliminar la columna
            $table->dropColumn('id_libro');
        });
    }
}
