<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            [
                'name' => 'Camiseta',
                'price' => 59.9,
                'quantity' => 20
            ],
            [
                'name' => 'Calça',
                'price' => 80.00,
                'quantity' => 2
            ],
            [
                'name' => 'Computador',
                'price' => 1.000,
                'quantity' => 50
            ]
        ]);
    }
}
