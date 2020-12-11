<?php
namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\User\Gate;
use session;
use DB;

use App\Room;
use App\Booking;


class BookingController extends Controller {

    // Only show date and types room to pick
    public function getFormBooking() {
        $type_room=DB::table('room_types')->get();  
        
        return view('users.formbookroom',compact('type_room'));
    }


    // 
    public function getRoom(Request $request) {
       
        
      
        if($request->session()->has('id_user')) 
        {
            if ($request->isMethod('POST')) {
                // take data from form  
                $time_from = $request->input('time_from');
                $time_to = $request->input('time_to');
                $take_type_room=$request->input('typeRoom');
    
                // cái đây để chừng so sánh id để hiển thị giá của phòng
                $all_room=DB::table('room_types')->get();
             // handle post request
    
                if($take_type_room == 'all') {
                    $rooms = Room::whereNotIn('id', function($query) use ($time_from, $time_to) {
                        $query->from('booking_room')
                            ->select('id')
                            ->where('time_from', '<=', $time_from)
                            ->orWhere('time_to', '>=', $time_to);
                        })->get();
                }
                else {
                    $rooms = Room::whereNotIn('id', function($query) use ($time_from, $time_to) {
                        $query->from('booking_room')
                            ->select('id')
                            ->where('time_from', '<=', $time_from)
                            ->where('time_to', '>=', $time_from);
                        })
                        ->where('id_type','=',$take_type_room)
                        ->get();
                }
                
            } else {
                $rooms = null;
            }

            $count=count($rooms);
            session()->put('time_from',$time_from);
            session()->put('time_to',$time_to);
           //var_dump($rooms);
    
    
            return view('users.showFreeRoom',compact('rooms','all_room','take_type_room','count'));
        }
        else
        {
            echo ("Error Page");
            return redirect()->route('signIn');
        }
    }

    
    // ************************* continue here about saving to table bookint_room*************************************
    public function saveBooking($room_id) {

        $booking_room= new Booking;
        $booking_room->time_from=session()->get('time_from');
        $booking_room->time_to=session()->get('time_to');
        $booking_room->room_id=$room_id;
        $booking_room->id_user=session()->get('id_user');
        $booking_room->status="true";
        $booking_room->save();

        return redirect()->route('homePage');
    }



}

