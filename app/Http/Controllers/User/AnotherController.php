<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\RoomType;

class AnotherController extends Controller {

    // get all types room and show in typeRoom.blade.php
    public function getTypeRoom() {
        $typeRoom=RoomType::all();
        
        return view('users.typeRoom',compact('typeRoom'));
    }

    // function return restaurents and bars
    function getChillClub() {
        return view('users.restaurent.chillClub');
    }
    function getVegetable() {
        return view('users.restaurent.vegetableRestaurent');
    }
    function getFunnyClub() {
        return view('users.restaurent.funnyClub');
    }


    // function return meeting and weeding rooms
    function getWeedingAndMeeting() {
        return view('users.meetingRoom');
    }
    function getWeedingRoom() {
        return view('users.meetingRoom.weedingRoom');
    }
    function getMeetingRoom() {
        return view('users.meetingRoom.meetingRoom');
    }

    // function return main services
    function getSpa() {
        return view('users.service.spa');
    }
    function getPool() {
        return view('users.service.pool');
    }

    function getRestaurentAndBar() {
        return view('users.restaurent');
    }
    

}