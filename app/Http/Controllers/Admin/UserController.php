<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    function getUser() {
        $users = User::all();
        return view('admin.users',compact('users'));
    }
    function deleteUser($id){
        DB:: table('users')->where('id','=',$id)->delete();
        return redirect()->route('nguoidung');
    }
}
