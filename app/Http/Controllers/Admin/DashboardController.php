<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Room;
use App\Service;
use App\Feedback;
class DashboardController extends Controller
{
    function GetTrangChuAdmin() {
        $users = User::all()->count();
        $rooms = Room::all()->count();
        $services = Service::all()->count();
        $num_of_feedback = Feedback::all()->count();
        return view('admin.dashboard',compact('users','rooms','services','num_of_feedback'));
    }
}
