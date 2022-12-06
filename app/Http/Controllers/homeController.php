<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function create(){
        return view('menu');
    }

    public function index(){
        return view('login');
    }
}


