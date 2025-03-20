<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Avión jet',
                'descripcion' => 'la nave mas linda',
                'precio' => 1000000,
                'stock' => 10,
                'categoria_id' => 1,
                'imagen' => 'https://media.diariolasamericas.com/p/7a732b795e81fbf8226bd0f9006b23a0/adjuntos/216/imagenes/002/203/0002203213/855x0/smart/learjet-75-liberty-exterior_jpeg.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Caballo',
                'descripcion' => 'La bestia negra',
                'precio' => 10000,
                'stock' => 23,
                'categoria_id' => 2,
                'imagen' => 'https://i.pinimg.com/474x/66/c3/a3/66c3a39369b6750384a066deb34bf92e.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'kindle',
                'descripcion' => 'kindle paperwhite',
                'precio' => 2000,
                'stock' => 30,
                'categoria_id' => 1,
                'imagen' => 'https://exitocol.vtexassets.com/arquivos/ids/10640386/libro-electronico-amazon-kindle-built-in-front-light-8gb-negro.jpg?v=637711201287700000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}