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
        return view('frontend.home');
    }


    public function about()
    {
        return view('frontend.about');
    }


    public function service()
    {
        return view('frontend.service');
    }


    public function plan()
    {
        return view('frontend.plan');
    }


    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function contact_us()
    {
        return view('frontend.contact_us');
    }


    public function project()
    {
        return view('frontend.project');
    }


    public function project_details($id)
    {
        $id = 1;
        return view('frontend.project-details', compact('id'));
    }
    
    public function service_details($id)
    {
        $id = 1;
        return view('frontend.service-details', compact('id'));
    }
}
