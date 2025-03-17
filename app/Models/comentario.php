<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class comentario extends Model
{
    use hasFactory;

    protected $fillable = [
        'contenido',
        'nombre_usuario',
        'email',
        'articulo_id'
    ];

    public function articulo()
    {
        return $this ->belongsTo(Articulo::class);
    }
}

