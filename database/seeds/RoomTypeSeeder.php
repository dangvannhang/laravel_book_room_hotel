<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
            ['id'=>1,'name'=>"Phòng chất lượng cao",'price'=>500000,'number_people'=>1,'max_people'=>2],
            ['id'=>2,'name'=>"Phòng đầy đủ tiện nghi",'price'=>350000,'number_people'=>3,'max_people'=>4],
            ['id'=>3,'name'=>"Phòng bình dân",'price'=>250000,'number_people'=>2,'max_people'=>3]
        ]);
    }
}
