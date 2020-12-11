<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Booking;
use Carbon\Carbon;
use DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // viet function tu cap nhat status cua cac phong
        $schedule->call(function () {

            $roomsBooked=Booking::all();
            $timeNow=Carbon::now();

            foreach($roomsBooked as $rmBooked) {
                // kiem tra neu thoi gian hien tai lon hon hoac bang thoi gian cua khach tra phong thi
                // tu update lai status thanh  "false" va tu xoa record do khoi booking_room
                if($timeNow->greaterThanOrEqualTo($rmBooked->time_to)) {
                    DB::table('booking_room')
                    ->where('room_id','=',$rmBooked->room_id)
                    ->delete();
                }
            }

        })->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
