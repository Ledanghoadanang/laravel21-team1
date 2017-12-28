<?php

use Illuminate\Database\Seeder;

class BranchsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('branchs')->insert([
        ['name' => 'ROLEX', 'style_id'  =>  1],
        ['name' => 'CASIO', 'style_id'  =>  1],
        ['name' => 'CITIZENT', 'style_id'  =>  1 ],
        ['name' => 'SENKO', 'style_id'  =>  1 ],
        ['name' => 'SUNRISE', 'style_id'  =>  2],
        ['name' => 'CASIO', 'style_id'  =>  2],
        ['name' => 'ORIENT', 'style_id'  =>  2 ],
        ['name' => 'SENKO', 'style_id'  =>  2 ],
      ]);
    }
}
