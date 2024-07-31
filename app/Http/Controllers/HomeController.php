<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Index
    public function index(){
        return view('frontend.themes.home');
    }

    // About
    public function about(){
        return view('frontend.themes.about');
    }

    // Experts
    public function experts(){
        return view('frontend.themes.experts');
    }

    // Travel
    public function travel(){
        return view('frontend.themes.travel');
    }
}
