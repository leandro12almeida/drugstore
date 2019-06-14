<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'description' => 'Amoxilina',
                'provider' => 'Fábrica XXYY',
                'price' => '10,00',
                'drugstore_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ],
            [
                'description' => 'Amoxilina',
                'provider' => 'Fábrica XXYY',
                'price' => '12,00',
                'drugstore_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ],
            [
                'description' => 'Amoxilina',
                'provider' => 'Fábrica XXYY',
                'price' => '13,00',
                'drugstore_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ]
        ];    
        
        Product::insert($products);
    }
}
