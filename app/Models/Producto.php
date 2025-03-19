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
        'stock',
        'categorias_id',
        'imagen',
    ];


public function categoria()
{
return $this->belongsTo(Categoria::class);
}
}
