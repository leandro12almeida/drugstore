<?php

use Illuminate\Database\Seeder;
use App\Drugstore;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $drugstores = [
            [
                'description' => 'Drogaria Araújo',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ],
            [
                'description' => 'Drogaria Onofre',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ],
            [
                'description' => 'Drogaria Lucena',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ]
        ];    
        
        Drugstore::insert($drugstores);

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
