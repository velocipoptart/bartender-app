<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to TacoBar!';
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        return view('pages.about');
    }
    public function order(){
        return view('pages.order');
    }
    public function queue(){
        return view('pages.queue');
    }

}
