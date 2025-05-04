<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }
    public function menu(){
        return view('pages.menu');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function booking(){
        return view('pages.booking');
    }
    public function team(){
        return view('pages.team');
    }
    public function testimonial(){
        return view('pages.testimonial');
    }

}
