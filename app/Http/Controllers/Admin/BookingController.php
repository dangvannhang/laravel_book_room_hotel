<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Booking;
use App\RoomType;
use App\User;
use App\Room;
use Symfony\Component\HttpFoundation\Request;
use Session;
use DB;

class BookingController extends Controller {

    public function show_roomBooked() {
        $bookRoom=Booking::all();
        $typeRoom=RoomType::all();
        $room=Room::all();
        $userBook=User::all();

        $count=0;
        
        return view('admin.booking',compact('bookRoom','typeRoom','userBook','count','room'));
    }

    // dung khi admin muon them vao bang thue phong
    // hien thi ra form chon thoi gian va loai phong de kiem tra 
    public function  chooseTimeBooking() {
        $typeRoom=RoomType::all();

        return view('admin.booking.createBooking',compact('typeRoom'));
    }   

    // Sau khi kiem tra, se hien thi ra cac phong con trong
    public function chooseRoom(Request $request) {
        if($request->isMethod('POST')) {

            $time_from=$request->time_from;
            $time_to=$request->time_to;
            $typeRoom=$request->typeRoom;

            $allTypeRoom=RoomType::all();
            // neu loai phong la 'all'
            if($typeRoom == 'all') {
                $rooms = Room::with('Booking')->whereHas('Booking', function ($q) use ($time_from, $time_to) {
                    $q->where(function ($q2) use ($time_from, $time_to) {
                        $q2->where('time_from', '>=', $time_to)
                        ->orWhere('time_to', '<=', $time_from);
                    });
                })->orWhereDoesntHave('Booking')->get();
            }
            // choose another type Room
            else {
                $rooms = Room::with('Booking')->whereHas('Booking', function ($q) use ($time_from, $time_to) {
                    $q->where(function ($q2) use ($time_from, $time_to) {
                        $q2->where('time_from', '>=', $time_to)
                        ->orWhere('time_to', '<=', $time_from);
                    });
                })->where('id_type','=',$typeRoom)
                ->orWhereDoesntHave('Booking')->get();
            }
        }   

        $count=count($rooms);
        session()->put('admin_time_from',$time_from);
        session()->put('admin_time_to',$time_to);

        return view('admin.booking.createBooking',compact('rooms','count','allTypeRoom'));
    }

    public function bookRoom(Request $request){

        $idPhong=$request->id;
        $allRoom=Room::all();
        $allTypeRoom=RoomType::all();

        $time_from=session()->get('admin_time_from');
        $time_to=session()->get('admin_time_to');

        session()->put('admin_roomId',$idPhong);

        return view('admin.booking.createBooking',compact('idPhong','allRoom','allTypeRoom','time_from','time_to'));
        
    }

    public function saveInfor(Request $request) {
        $idPhong=session()->get('admin_roomId');
        $allRoom=Room::all();
        $allTypeRoom=RoomType::all();

        session()->get('admin_roomId');
        session()->get('admin_time_from');
        session()->get('admin_time_to');

        session()->put('name_customer',$request->name_customer);
        $allRoom=Room::all();

        $time_from=session()->get('admin_time_from');
        $time_to=session()->get('admin_time_to');


        $role='user';
        $verify='0';
        $remember_token='null';
        
        $user=new User();
        $user->name=$request->name_customer;
        $user->gender=$request->gender;
        $user->dateOfBirth=$request->dob_customer;
        $user->email=$request->mail_customer;
        $user->address=$request->add_customer;
        $user->password='password';
        $user->phone=$request->phone_customer;
        $user->role=$role;
        $user->verify=$verify;
        $user->remember_token=$remember_token;
        $user->save();
        return view('admin.booking.createBooking',compact('user','allRoom','allTypeRoom','idPhong','time_from','time_to'));
    }

    public function saveBookRoom() {

       

        $idUser=DB::table('users')->latest('id')->first();

       
        $lastId=$idUser->id;

        $book= new Booking();
        $book->room_id=session()->get('admin_roomId');
        $book->time_from=session()->get('admin_time_from');
        $book->time_to=session()->get('admin_time_to');
        $book->status='true';
        $book->id_user=$lastId;
        $book->save();
        return redirect('/admin/booking');
        
    }

} 