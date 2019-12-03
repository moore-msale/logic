<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(Request $request)
    {
        Mail::to('mackinkenny@gmail.com')->send(new Message($request->all()));

        if ($request->ajax()){
            return response()->json("success");
        }

        return back();
    }
}
