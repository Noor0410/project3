<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'T-Shirt 1',
                'color' => 'Red',
                'price' => 1200,
                'category' => 'women'
            ],
            [
                'name' => 'T-Shirt 2',
                'color' => 'Black',
                'price' => 1200,
                'category' => 'women'
            ],
            [
                'name' => 'T-Shirt 3',
                'color' => 'Yellow',
                'price' => 1500,
                'category' => 'women'
            ],
            [
                'name' => 'T-Shirt 4',
                'color' => 'Navy',
                'price' => 1500,
                'category' => 'women'
            ],
            [
                'name' => 'T-Shirt 5',
                'color' => 'Cream',
                'price' => 1500,
                'category' => 'women'
            ],
            [
                'name' => 'T-Shirt 1',
                'color' => 'Red',
                'price' => 1200,
                'category' => 'shirts'
            ],
            [
                'name' => 'T-Shirt 2',
                'color' => 'Plain white',
                'price' => 1200,
            
                'category' => 'shirts'
            ],
            [
                'name' => 'T-Shirt 4',
                'color' => 'Navy',
                'price' => 1500,
                'category' => 'shirts'
            ],
            [
                'name' => 'T-Shirt 5',
                'color' => 'Plain purple',
                'price' => 1500,
            
                'category' => 'shirts'
            ],
            [
                'name' => 'T-Shirt 5',
                'color' => 'Cream',
                'price' => 1500,
                'category' => 'shirts'
            ],
            [
                'name' => 'T-Shirt 1',
                'color' => 'Plain black',
                'price' => 1200,
            
                'category' => 'shirts'
            ],
            [
                'name' => 'T-Shirt 3',
                'color' => 'Yellow',
                'price' => 1500,
                'category' => 'shirts'
            ],
            [
                'name' => 'T-Shirt 3',
                'color' => 'Plain red',
                'price' => 1500,
            
                'category' => 'shirts'
            ],
            [
                'name' => 'T-Shirt 2',
                'color' => 'Black',
                'price' => 1200,
                'category' => 'shirts'
            ],
            [
                'name' => 'T-Shirt 4',
                'color' => 'Plain navy',
                'price' => 1500,
            
                'category' => 'shirts'
            ],
            [
                'name' => 'T-Shirt 1',
                'color' => 'Plain black',
                'price' => 1200,
            
                'category' => 'men'
            ],
            [
                'name' => 'T-Shirt 2',
                'color' => 'Plain white',
                'price' => 1200,
            
                'category' => 'men'
            ],
            [
                'name' => 'T-Shirt 3',
                'color' => 'Plain red',
                'price' => 1500,
            
                'category' => 'men'
            ],
            [
                'name' => 'T-Shirt 4',
                'color' => 'Plain navy',
                'price' => 1500,
            
                'category' => 'men'
            ],
            [
                'name' => 'T-Shirt 5',
                'color' => 'Plain purple',
                'price' => 1500,
            
                'category' => 'men'
            ],
        ]);
    }
}
