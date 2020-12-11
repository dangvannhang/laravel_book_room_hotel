<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Room;
use Illuminate\Http\Request;
use App\RoomType;
use DB;


class PageController extends Controller
{
    // tra ve trang chu cua trang web
    function getHomePage() {
        // dung bien $type_room de tra ve gia tri cac loai phong
        $type_room=DB::table('room_types')->get();  

        return view('users.homePage',compact('type_room'));
    }
    
    
    // tra ve cac phong cua trang web
    function getOurRoom() {
        return view('users.ourRoom');
    }


    //Get admin page
    function GetTrangChuAdmin() {
        $num= Feedback::all()->count();
        return view('admin.dashboard',['num_of_feedback'=>$num]);
    }

    function GetServices() {
        return view('admin.service');
    }
    function GetBooking() {
        return view('admin.booking');
    }
    function GetAmount() {
        return view('admin.amount');
    }

}
