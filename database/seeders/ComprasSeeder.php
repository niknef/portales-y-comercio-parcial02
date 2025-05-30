<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('compras')->insert([
            [
                'compra_id' => 1,
                'articulo_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'compra_id' => 2,
                'articulo_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
