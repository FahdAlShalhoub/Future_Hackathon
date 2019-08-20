<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function viewGroup()
    {
        return view('viewGroup');
    }

    public function done(){
        return view('done');
    }

}
