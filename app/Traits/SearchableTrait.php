<?php

namespace App\Traits;

trait SearchableTrait
{
    public function applySearchFilter($query, $request, array $fields)
    {
        if ($request->filled('buscar')) {
            $busqueda = $request->input('buscar');
            $query->where(function ($q) use ($busqueda, $fields) {
                foreach ($fields as $field) {
                    $q->orWhere($field, 'like', '%' . $busqueda . '%');
                }
            });
        }

        return $query;
    }
}
