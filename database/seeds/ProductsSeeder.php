<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
        ['name' => 'CASIO NAM A1', 'quantity'  =>  20,  'price' =>  500000, 'image'  =>  'dong-ho-casio-EFB-300L-1-AV-(6).jpg', 'description'  =>  'Đồng hồ thiết kế cho nam, đẹp.', 'branch_id' =>  2 ],
        ['name' => 'CASIO NAM A2', 'quantity'  =>  30,  'price' =>  700000, 'image'  =>  'Dong-ho-casio-nam-EF-539FG-1A.jpg', 'description'  =>  'Đồng hồ thiết kế cho nam, đẹp.', 'branch_id' =>  2 ],
        ['name' => 'CITIZENT NAM C1', 'quantity'  =>  20,  'price' =>  900000, 'image'  =>  'citizent.jpg', 'description'  =>  'Đồng hồ thiết kế cho nam, đẹp.', 'branch_id' =>  3 ],
        ['name' => 'CASIO NAM C2', 'quantity'  =>  10,  'price' =>  600000, 'image'  =>  'citizent1.jpg', 'description'  =>  'Đồng hồ thiết kế cho nam, đẹp.', 'branch_id' =>  3  ],
        ['name' => 'SUNRISE NỮ S1', 'quantity'  =>  20,  'price' =>  500000, 'image'  =>  'runrise2.jpg', 'description'  =>  'Đồng hồ thiết kế cho nữ, mẫu đẹp.', 'branch_id' =>  5 ],
        ['name' => 'SUNRISE NỮ S2', 'quantity'  =>  50,  'price' =>  500000, 'image'  =>  'sunrise1.jpg', 'description'  =>  'Đồng hồ thiết kế cho nữ, mẫu đẹp.', 'branch_id' =>  5  ],
      ]);
    }
}
