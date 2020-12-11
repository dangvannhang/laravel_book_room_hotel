<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Mail\RegisterEmail as MailRegisterEmail;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Mail\RegisterEmail;
class SignUpController extends Controller
{
    function getSignUp(){
        return view('auth.signup');
    }
    public function signUp(Request $req){
        if($req->input('confirmPass') == $req->input('pass')){
            $name =$req->input('name');
            $gender =$req->input('gender');
            $dateOfBirth=$req->input('dateOfBirth');
            $phone =$req->input('phone');
            $address=$req->input('address');
            $email = $req->input('email');
            $password = Hash::make($req->input('pass'));
            if(count(DB::table('users')->where('email','=',$email)->get())==0){
                $user = new User();
                $user->name = $name;
                $user->gender = $gender;
                $user->dateOfBirth = $dateOfBirth;
                $user->email = $email;
                $user->address = $address;
                $user->phone = $phone;
                $user->password = $password;
                $user->role ="user";
                $user->verify = false;
                $user->save();

                //Send email
                $code = rand(100000,999999);
                $data  =['code'=> $code];
                Session::forget('code');
                Session::push('code',$code);
                Mail::to($email)->send(new MailRegisterEmail($data));
                return view('auth.code',['userId'=>$user->id,'userEmail'=>$email]);
            }else{
                echo "Email da ton tai";
            }
        }else{
            return view('auth.signup');
        }
    }

    function getVerify(){
        return view('auth.code');
    }
    function checkVerify(Request $request){
        $code = $request->code;
        $emailCode =  Session::get('code');
        if($code == $emailCode[0]){
           echo $request->userId;
           $user = User::find($request->userId);
           $user->verify = true;
           $user->save();
           return redirect('/sign-in');
        }else{
            echo "wrong";
        }
    }
}
