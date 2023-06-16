<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;


class IndexPageController extends Controller
{
    public function index()
    {
        $teachers = User::limit(3)->get();
        $services = Service::limit(3)->get();

        return view('index', compact('teachers', 'services'));
    }


    public function send_mail(Request $request)
    {
        Mail::to($request->email)->send(new MailSend($request));

        return redirect()->back();
    }
}
