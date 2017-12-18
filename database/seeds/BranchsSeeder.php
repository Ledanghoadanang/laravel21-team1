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
        ['name' => 'ROLEX', 'id_style'  =>  1],
        ['name' => 'CASIO', 'id_style'  =>  1],
        ['name' => 'CITIZENT', 'id_style'  =>  1 ],
        ['name' => 'SENKO', 'id_style'  =>  1 ],
        ['name' => 'SUNRISE', 'id_style'  =>  2],
        ['name' => 'CASIO', 'id_style'  =>  2],
        ['name' => 'ORIENT', 'id_style'  =>  2 ],
        ['name' => 'SENKO', 'id_style'  =>  2 ],
      ]);
    }
}
