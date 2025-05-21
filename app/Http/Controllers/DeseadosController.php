<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\SearchableTrait;

class DeseadosController
{
    use SearchableTrait;

    public function index(Request $request)
    {
        $query = DB::table('librosdeseados')
            ->join('libros', 'librosdeseados.id_libro', '=', 'libros.id')
            ->leftJoin('autores', 'libros.author_id', '=', 'autores.id')
            ->leftJoin('categorias', 'libros.category_id', '=', 'categorias.id')
            ->select('libros.*', 'autores.nombre as autor', 'categorias.nombre as categoria');

        // Aplicar búsqueda usando el trait
        $query = $this->applySearchFilter($query, $request, [
            'libros.titulo',
            'autores.nombre',
            'categorias.nombre',
            'libros.descripcion'
        ]);

        $librosDeseados = $query->get();

        return view('deseados', compact('librosDeseados'));
    }

    public function quitar($id)
    {
        $userId = auth()->id(); // o reemplazar si no usas auth

        $deleted = DB::table('librosdeseados')
            ->where('id_libro', $id)
            ->where('user_id', $userId)
            ->delete();

        if ($deleted) {
            return redirect()->route('deseados')->with('success', 'Libro quitado de tus deseados.');
        } else {
            return redirect()->route('deseados')->with('error', 'No se pudo quitar el libro de tus deseados.');
        }
    }


    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            // Obtener la ruta de la imagen del libro antes de borrarlo
            $libro = DB::table('libros')->where('id', $id)->first();

            if ($libro && $libro->imagen && \Storage::disk('public')->exists($libro->imagen)) {
                \Storage::disk('public')->delete($libro->imagen);
            }

            // Eliminar de librosdeseados donde id_libro = $id
            DB::table('librosdeseados')->where('id_libro', $id)->delete();

            // Eliminar de libros donde id = $id
            DB::table('libros')->where('id', $id)->delete();

            DB::commit();

            return redirect()->route('deseados')->with('success', 'Libro eliminado correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('deseados')->with('error', 'Error al eliminar el libro.');
        }
    }

}
