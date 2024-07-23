<?php

namespace App\Http\Controllers;

use App\Models\GenarelInfo;
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
        $data = GenarelInfo::select('value')->where('field_name','about-background')->first();
        return view('fontend.mainPages.about',compact('data'));
    }
    public function services()
    {
        $data = GenarelInfo::select('value')->where('field_name','service-background')->first();
        return view('fontend.mainPages.services',compact('data'));
    }
    public function blogs()
    {
        $data = GenarelInfo::select('value')->where('field_name','blog-background')->first();
        return view('fontend.mainPages.blogs',compact('data'));
    }
    public function kyc()
    {
        return view('fontend.mainPages.kyc');
    }
}
