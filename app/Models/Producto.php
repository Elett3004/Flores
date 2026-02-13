<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
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
