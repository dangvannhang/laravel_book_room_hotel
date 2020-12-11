<?php

namespace App\Http\Controllers\Admin;

use App\Feedback;
use App\Http\Controllers\Controller;
use App\Mail\RepFeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    //
    function index(){
   $feedbacks= Feedback::all();
   return view('admin.feedback',['feedbacks'=>$feedbacks]);
    }
    function reply(Request $req){
        $mail=$req->mail;
        $name=$req->name;
        $content=$req->content;
        Mail::to($mail)->send(new RepFeedbackMail($name,$content));
        $fb= Feedback::find($req->id);
        $fb->reply=$content;
        $fb->save();
        return redirect()->back();
    }
    function delete(Request $req){
        $id=$req->id;
        Feedback::find($id)->delete();
        return redirect()->back();
    }
}
