<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=> 'Product 1',
            'detail' => 'Detail 1',
            'price'=> '10000',
            'image'=> 'image1.jpg',
        ]);
        Product::create([
            'name'=> 'Product 12',
            'detail' => 'Detail 12',
            'price'=> '100002',
            'image'=> 'image12.jpg',
        ]);
        Product::create([
            'name'=> 'Product 13',
            'detail' => 'Detail 13',
            'price'=> '100003',
            'image'=> 'image13.jpg',
        ]);
        Product::create([
            'name'=> 'Product 14',
            'detail' => 'Detail 14',
            'price'=> '100004',
            'image'=> 'image14.jpg',
        ]);
        Product::create([
            'name'=> 'Product 15',
            'detail' => 'Detail 15',
            'price'=> '100005',
            'image'=> 'image15.jpg',
        ]);
    }
}
