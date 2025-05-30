<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articulos')->insert([
                [
                    'nombre' => 'Camiseta Titular River Plate 2023',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 23/24',
                    'precio' => 55900.00,
                    'talle_id' => 4, // L
                    'imagen' => 'camiseta1.PNG',
                    'imagen_hover' => 'camiseta1-atras.png',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 1,
                    'cantidad' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Camiseta Suplente River Plate 2023',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 23/24',
                    'precio' => 55900.00,
                    'talle_id' => 3, // M
                    'imagen' => 'camiseta2.PNG',
                    'imagen_hover' => 'camiseta2-atras.png',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 1,
                    'cantidad' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Camiseta Arquero River Plate 2023',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 23/24',
                    'precio' => 72000.00,
                    'talle_id' => 5, // XL
                    'imagen' => 'camiseta3.PNG',
                    'imagen_hover' => 'camiseta3-atras.png',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 1,
                    'cantidad' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Campera Oficial River Plate 2023',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 23/24',
                    'precio' => 85000.00,
                    'talle_id' => 6, // XXL
                    'imagen' => 'camiseta4.PNG',
                    'imagen_hover' => 'camiseta4-atras.png',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 2,
                    'cantidad' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Buzo Oficial River Plate 2023',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 23/24',
                    'precio' => 65000.00,
                    'talle_id' => 5, // XL
                    'imagen' => 'camiseta5.PNG',
                    'imagen_hover' => 'camiseta5-atras.png',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 3,
                    'cantidad' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Remera Oficial River Plate 2023',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 23/24',
                    'precio' => 15000.00,
                    'talle_id' => 1, // XS
                    'imagen' => 'camiseta6.PNG',
                    'imagen_hover' => 'camiseta6-atras.png',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 4,
                    'cantidad' => 7,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Camiseta Titular River Plate 2024',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 24/25',
                    'precio' => 124000.00,
                    'talle_id' => 4, // L
                    'imagen' => 'camiseta7.jpg',
                    'imagen_hover' => 'camiseta7-atras.jpg',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 1,
                    'cantidad' => 12,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Camiseta Suplente River Plate 2024',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 24/25',
                    'precio' => 100000.00,
                    'talle_id' => 3, // M
                    'imagen' => 'camiseta8.jpg',
                    'imagen_hover' => 'camiseta8-atras.jpg',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 1,
                    'cantidad' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Camiseta Arquero River Plate 2024',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 24/25',
                    'precio' => 80000.00,
                    'talle_id' => 5, // XL
                    'imagen' => 'camiseta9.jpg',
                    'imagen_hover' => 'camiseta9-atras.jpg',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 1,
                    'cantidad' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Campera Oficial River Plate 2024',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 24/25',
                    'precio' => 76000.00,
                    'talle_id' => 7, // XXXL
                    'imagen' => 'camiseta10.jpg',
                    'imagen_hover' => 'camiseta10-atras.jpg',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 2,
                    'cantidad' => 9,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Buzo Oficial River Plate 2024',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 24/25',
                    'precio' => 40000.00,
                    'talle_id' => 4, // L
                    'imagen' => 'camiseta11.jpg',
                    'imagen_hover' => 'camiseta11-atras.jpg',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 3,
                    'cantidad' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Remera Oficial River Plate 2024',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 24/25',
                    'precio' => 25000.00,
                    'talle_id' => 3, // M
                    'imagen' => 'camiseta12.jpg',
                    'imagen_hover' => 'camiseta12-atras.jpg',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 4,
                    'cantidad' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Short Suplente River Plate 2024',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 24/25',
                    'precio' => 21000.00,
                    'talle_id' => 2, // S
                    'imagen' => 'camiseta13.jpg',
                    'imagen_hover' => 'camiseta13-atras.jpg',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 5,
                    'cantidad' => 9,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Short Jugador River Plate 2024',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 24/25',
                    'precio' => 21000.00,
                    'talle_id' => 4, // L
                    'imagen' => 'camiseta14.jpg',
                    'imagen_hover' => 'camiseta14-atras.jpg',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 5,
                    'cantidad' => 9,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Short Arquero River Plate 2024',
                    'descripcion' => 'AUTHENTIC RIVER PLATE 24/25',
                    'precio' => 20000.00,
                    'talle_id' => 5, // XL
                    'imagen' => 'camiseta15.jpg',
                    'imagen_hover' => 'camiseta15-atras.jpg',
                    'fecha_creacion' => '2024-01-01',
                    'categoria_id' => 5,
                    'cantidad' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => 'Calza Running 2024',
                    'descripcion' => 'Calza para actividad fisica',
                    'precio' => 20000.00,
                    'talle_id' => 3, // M
                    'imagen' => 'camiseta16.jpg',
                    'imagen_hover' => 'camiseta16-atras.jpg',
                    'fecha_creacion' => '2024-03-28',
                    'categoria_id' => 6,
                    'cantidad' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            
        ]);
    }
}