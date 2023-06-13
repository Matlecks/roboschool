<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;

class IndexPageController extends Controller
{
    public function index()
    {
        $teachers = User::limit(3)->get();
        $services = Service::limit(3)->get();

        return view('index', compact('teachers','services'));
    }


}

