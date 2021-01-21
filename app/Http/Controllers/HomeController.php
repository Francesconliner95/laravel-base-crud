<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Controller standard per gestire la rotta home
class HomeController extends Controller
{
    public function index(){

        return view('home');
    }
}
