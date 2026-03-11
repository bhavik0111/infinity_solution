<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    /*
    

     */
    public function animated_login()
    {
        return view('authentication.login');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.home');
    }


    public function about()
    {
        return view('user.about');
    }


    public function service()
    {
        return view('user.service');
    }


    public function plan()
    {
        return view('user.plan');
    }
    






}
