<?php

namespace App\Http\Controllers\DashboardControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BackendController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function dashboard()
    {
        $users = array();
        $teams =  array();
        $messages = array();
        return view('dashboard.pages.dashboard', compact('users', 'teams', 'messages'));
    }
    public function bannerPublish()
    {
        $content = View::make('fontend.section.homePageSection.bannerTemplate')->render();

        // Path to the new static Blade view file
        $path = resource_path('views/fontend/section/homePageSection/banner_section.blade.php');

        // Write the rendered content to the Blade view file
        file_put_contents($path, $content);

          // Render the Blade view
        return view('fontend.section.homePageSection.banner_section');
    }
}
