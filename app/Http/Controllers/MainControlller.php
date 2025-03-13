<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControlller extends Controller
{
    public function index()
    {
        return view('main',[
            'title' => 'Sky Shop'

        ]);
    }
}   
