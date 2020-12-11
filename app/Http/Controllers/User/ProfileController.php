<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    function GetViewProfile() {
        return view('users.viewprofile');
    }
    function UpdateProfile($id, Request $request) {
        $name = $request->input('name');
        $gender = $request->input('gender');
        $dateOfBirth = $request->input('dateOfBirth');
        $address = $request->input('address');
        $phone = $request->input('phone');

        DB::table('users')->where('id','=',$id)->update(['name'=>$name,'gender'=>$gender,'dateOfBirth'=>$dateOfBirth,'address'=>$address,'phone'=>$phone]);
        return redirect()->route('viewprofile');
    }
}
