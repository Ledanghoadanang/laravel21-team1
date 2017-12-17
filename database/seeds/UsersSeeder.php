<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        ['name' => 'Mai Thị Mỹ Duyên', 'email'  =>  'maimyduyen140496@gmail.com', 'password'  =>  'maimyduyen140496', 'phone' => '0935627122', 'address'  => 'Hòa Liên, Hòa Vang, TP.Đà Nẵng','gender'  => '2', 'role' => 1],
        ['name' => 'Lê Đăng Hóa', 'email'  =>  'ledanghoadanang@gmail.com', 'password'  =>  'ledanghoa', 'phone' => '0935627244', 'address'  => 'Thanh Bình, Hải Châu, TP.Đà Nẵng','gender'  => '1', 'role' => 1],
        ['name' => 'Nguyễn Hùng', 'email'  =>  'nguyenhung@gmail.com', 'password'  =>  'hunghung', 'phone' => '0935327244', 'address'  => 'Thanh Bình, Hải Châu, TP.Đà Nẵng','gender'  => '1', 'role' => 0],
      ]);
    }
}
