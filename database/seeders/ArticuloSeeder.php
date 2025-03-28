<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articulo;

class ArticuloSeeder extends Seeder
{
    public function run()
    {
        
        Articulo::create([
            'titulo' => 'Primer Artículo',  
            'contenido' => 'Este es el contenido del artículo número 1.',
            'imagen_destacada' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRodh3OU6h7Z-UA5PgTSGtElCUnHmR9nsiGDA&s',
            'autor' => 'Juan Pérez',
            'categoria_blog_id' => 1, // 
            'fecha_publicacion' => '2025-03-28',
        ]);

        Articulo::create([
            'titulo' => 'Segundo Artículo', 
            'contenido' => 'Este es el contenido del artículo número 2.',
            'imagen_destacada' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRodh3OU6h7Z-UA5PgTSGtElCUnHmR9nsiGDA&s',
            'autor' => 'Ana Gómez',
            'categoria_blog_id' => 2, 
            'fecha_publicacion' => '2025-03-29',
        ]);

        
    }
}
