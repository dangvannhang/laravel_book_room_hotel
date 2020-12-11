<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            ['id'=>1,'id_type'=>1,'name'=>'101','floor'=>'1', 'image'=>'slide1.jpg','note'=>"Phòng đầy đủ tiện nghi"],
            ['id'=>2,'id_type'=>1,'name'=>'102','floor'=>'1', 'image'=>'slide1.jpg','note'=>"Phòng đầy đủ tiện nghi"],
            ['id'=>3,'id_type'=>1,'name'=>'103','floor'=>'1', 'image'=>'slide1.jpg','note'=>"Phòng đầy đủ tiện nghi"],
            ['id'=>4,'id_type'=>1,'name'=>'104','floor'=>'1', 'image'=>'slide1.jpg','note'=>"Phòng đầy đủ tiện nghi"],

            ['id'=>5,'id_type'=>2, 'name'=>'201','floor'=>'1', 'image'=>'slide2.jpg','note'=>"Thoáng mát và sạch sẽ."],
            ['id'=>6,'id_type'=>2, 'name'=>'202','floor'=>'1', 'image'=>'slide2.jpg','note'=>"Thoáng mát và sạch sẽ."],
            ['id'=>7,'id_type'=>2,'name'=>'203','floor'=>'1', 'image'=>'slide2.jpg','note'=>"Thoáng mát và sạch sẽ."],
            ['id'=>8,'id_type'=>2,'name'=>'204','floor'=>'1', 'image'=>'slide2.jpg','note'=>"Thoáng mát và sạch sẽ."],
            ['id'=>9,'id_type'=>2,'name'=>'205','floor'=>'2', 'image'=>'slide2.jpg','note'=>"Thoáng mát và sạch sẽ."],

            ['id'=>10,'id_type'=>3, 'name'=>'301','floor'=>'2', 'image'=>'slide3.jpg','note'=>"Cơ sở vật chất đầy đủ"],
            ['id'=>11,'id_type'=>3,'name'=>'302','floor'=>'2',  'image'=>'slide3.jpg','note'=>"Cơ sở vật chất đầy đủ"],
            ['id'=>12,'id_type'=>3,'name'=>'303','floor'=>'2', 'image'=>'slide3.jpg','note'=>"Cơ sở vật chất đầy đủ"],
            ['id'=>13,'id_type'=>3,'name'=>'304','floor'=>'2', 'image'=>'slide3.jpg','note'=>"Cơ sở vật chất đầy đủ"],
            ['id'=>14,'id_type'=>3,'name'=>'305','floor'=>'2', 'image'=>'slide3.jpg','note'=>"Cơ sở vật chất đầy đủ"],
            ['id'=>15,'id_type'=>3,'name'=>'306','floor'=>'2', 'image'=>'slide3.jpg','note'=>"Cơ sở vật chất đầy đủ"],

        ]);
    }
}
