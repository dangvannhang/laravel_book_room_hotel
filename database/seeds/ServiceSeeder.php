<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['id'=>1,'name'=>'Do uong','image'=>'/storage/public/drink.jpg','price'=>20000,'note'=>'Cung cấp đầy đủ thức uống tươi ngon, mát lạnh'],
            ['id'=>2,'name'=>'Massage','image'=>'/storage/public/massage.jpg','price'=>2300,'note'=>'Tạo cảm giác thư gián, thoải mái'],
            ['id'=>3,'name'=>'Giat ui quan ao','image'=>'/storage/public/washing.jpg','price'=>30000,'note'=>'Tiện lợi'],
            ['id'=>4,'name'=>'Xe dua don','image'=>'/storage/public/bus.jpg','price'=>40000,'note'=>'An toàn, tiết kiệm'],
            ['id'=>5,'name'=>'Phong tap GYM','image'=>'/storage/public/gym.jpg','price'=>60000,'note'=>'Thuận tiện'],
        ]);
    }
}
