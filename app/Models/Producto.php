<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'fecha_entrega',
        'estado',
        'activo'
    ];

    /**
     * Scope para obtener solo productos activos
     */
    public function scopeActivos($query)
    {
        return $query->where('activo', true);
    }
}
