<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.main');
    }
    public function about()
    {
        return view('user.about');
    }
    public function contacts()
    {
        return view('user.contacts');
    }
    public function basket()
    {
        return view('user.basket');
    }
}
