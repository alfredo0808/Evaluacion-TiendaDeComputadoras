<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('productos')->insert([
        [
        'nombre'=>'Laptop hp',
        'precio'=> 3200.00,
        'marcas_id'=> 1, 
        'created_at'=> now(),
        'updated_at'=> now(),
    ],
    [
        'nombre'=>'Teclado, maus',
        'precio'=> 350.00,
        'marcas_id'=> 2, 
        'created_at'=> now(),
        'updated_at'=> now(),
    ],
    [
        'nombre'=>'Monitor hp',
        'precio'=> 2500.00,
        'marcas_id'=> 3, 
        'created_at'=> now(),
        'updated_at'=> now(),
    ]
    ]); 
    }
}
