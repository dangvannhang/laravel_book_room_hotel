<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Mail\ForgotPassEmail as MailForgotPassEmail;
use Illuminate\Mail\ForgotPassEmail;
use App\User;
class ForgotPassController extends Controller
{
    function GetForgotPass(){
        return view('auth.forgotPass');
    }
    function ForgotPass(Request $request){
        $email = $request->input('email');
        $user = DB::table('users')->where('email','=',$email)->first();
        if($user->email == $email){
            $code = rand(100000,999999);
            $data  = ['code'=> $code];
            Session::forget('code');
            Session::push('code',$code);
            Mail::to($email)->send(new MailForgotPassEmail($data));
            return view('auth.codeChangPass',['userId'=>$user->id,'userEmail'=>$email]);
        }
        else{
            return redirect()->back()->with('notification','Tài khoản của bạn không tồn tại');
        }
    }
    function getVerify(){
        return view('auth.codeChangPass');
    }
    function checkVerify(Request $request){
        $code = $request->input('code');
        $emailCode =  Session::get('code');
        if($code == $emailCode[0]){
            $userId = $request->input('userId');
           return view('auth.changePass',["idUser"=>$userId]);
        }else{
            return redirect()->back()->with('notification','Mã xác thực không đúng');
        }
    }
    function getChangPass(){
        return view('auth.changePass');
    }
    function changPass(Request $request){
        $pass = $request->input('pass');
        $userId = $request->input('idUser');
        $user = User::find($userId);
        $user->password = Hash::make($pass);
        $user->save();
        return redirect()->route('signIn');
    }
}
