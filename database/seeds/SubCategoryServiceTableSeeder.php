<?php

use Illuminate\Database\Seeder;
use App\SubCategoryService;

class SubCategoryServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
        public function run()
    {
        factory(SubCategoryService::class, 10)->create();
    }
    
}
