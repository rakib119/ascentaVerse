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
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('fontend.mainPages.index');
    }

    public function about()
    {
        return view('fontend.mainPages.about');
    }
    public function services()
    {
        return view('fontend.mainPages.services');
    }
    public function blogs()
    {
        return view('fontend.mainPages.blogs');
    }
    public function kyc()
    {
        return view('fontend.mainPages.kyc');
    }
}
