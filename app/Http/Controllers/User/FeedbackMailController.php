<?php

namespace App\Http\Controllers\User;

use App\Feedback;
use App\Http\Controllers\Controller;
use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackMailController extends Controller
{
    //
    function send(Request $req){
        $mail=$req->mail;
        $name=$req->name;
        $content=$req->content;
        $feedback= new Feedback();
        $feedback->content=$content;
        $feedback->name=$name;
        $feedback->mail=$mail;
        $feedback->reply='Chưa trả lời';
        $feedback->save();
        Mail::to($mail)->send(new FeedbackMail());
        return redirect()->back();
    }
    public function delete($id)
        {
            $feedback = Feedback::find($id);
            $feedback->delete();
            return Redirect()->back();
        }

}
