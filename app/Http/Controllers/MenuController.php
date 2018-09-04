<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('menu.index');
    }
    public function specials(){
        return view('menu.specials');
    }
    public function drinks(){
        return view('menu.drinks');
    }
    public function food(){
        return view('menu.food');
    }
}
