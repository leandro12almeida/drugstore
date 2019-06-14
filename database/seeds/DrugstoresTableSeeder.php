<?php

use Illuminate\Database\Seeder;

class DrugstoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
