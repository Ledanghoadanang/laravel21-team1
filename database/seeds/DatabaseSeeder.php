<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StylesSeeder::class);
        $this->call(BranchsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(UsersSeeder::class);

    }
}
