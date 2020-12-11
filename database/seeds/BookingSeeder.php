<?php

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('booking_room')->insert([
            ['id'=>'1','time_from'=>'2020-08-10','time_to'=>'2020-08-25','status'=>'true','room_id'=>'1','id_user'=>'2'],
            ['id'=>'2','time_from'=>'2020-08-19','time_to'=>'2020-08-30','status'=>'true','room_id'=>'6','id_user'=>'3'],
            ['id'=>'3','time_from'=>'2020-08-12','time_to'=>'2020-08-27','status'=>'true','room_id'=>'3','id_user'=>'4'],


        ]);
    }
}
