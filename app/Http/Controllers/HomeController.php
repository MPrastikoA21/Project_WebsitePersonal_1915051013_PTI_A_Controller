<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function header()
    {
        return view('header');
    }
    public function blog1()
    {
        return view('blog1');
    }
}