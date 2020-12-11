<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\RegisterEmail as MailRegisterEmail;

use App\User;
class LoginController extends Controller
{
    function getSignIn(){
        return view('auth.signIn');
    }
    function signIn(Request $req){
        $email = $req->input('email');
        $password = $req->input('password');

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            if($user->role == 'admin'){
                return redirect('admin');
            }else{
                if($user->verify){
                    // Khi ma kiem tra xong ma nguoi dung la user, thi se lay id cua user de luu vao session
                    // de khi user dat phong thi co the biet nguoi do la ai
                    $id_user = User::select('id')->where('email','=',$email)->first();
                    session()->put('id_user',$id_user->id);
                    return redirect('');
                }else{
                    $code = rand(100000,999999);
                    $data  =['code'=> $code];
                    Session::forget('code');
                    Session::push('code',$code);
                    Mail::to($email)->send(new MailRegisterEmail($data));
                    return view('auth.code',['userId'=>$user->id,'userEmail'=>$user->email]);
                }

            }
        }
        else{
            return redirect()->back()->with('notification','Thong tin dang nhap khong hop le');
        }
    }
    function signOut(){
        Session::flush();
        return redirect('');
    }
}
