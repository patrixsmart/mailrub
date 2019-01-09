<?php

namespace Patrixsmart\Mailfast\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Patrixsmart\Mailfast\Models\Mailfast;
use Patrixsmart\Mailfast\Mail\MailfastMail;

class MailfastController extends Controller
{
    
    public function form()
    {
        return view ('mailfast::mailfastForm');
    }

    public function send(Request $request)
    {
        Mail::send(new MailfastMail());

        Mailfast::create($request->all());

        return back()->with('success','Email Has Been Sent Successfully');
    }

}
