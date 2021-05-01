<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(SubCategoryServiceTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(CarouselTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
