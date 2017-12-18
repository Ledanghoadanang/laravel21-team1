<?php

use Illuminate\Database\Seeder;

class StylesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('styles')->insert([
        ['name' => 'ĐỒNG HỒ NAM'],
        ['name' => 'ĐỒNG HỒ NỮ'],
      ]);
    }
}
