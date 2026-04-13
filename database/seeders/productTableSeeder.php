<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produt;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        Product::create
        ([
            'name'=> 'papa',
            'description'=> 'verdura',
            'descriptionLong' => 'vegetal que puede ser usado en multiples recetas',
            'price'=> 4.5
        ]);
    }
}
