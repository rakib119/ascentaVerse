<?php

namespace App\Http\Controllers\DashboardControllers\home;

use App\Http\Controllers\Controller;
use App\Models\SingleSection;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class hs2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $SingleSection = SingleSection::where('section_id',2)->first();
        $data = ['data'=> $SingleSection];
        return view('dashboard.pages.home.section2.index',$data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'lebel'=>'required|max:40',
            'title'=>'required|max:150',
            'short_description'=>'required|max:600',
            'btn1'=>'nullable|max:150',
            'btn2'=>'nullable|max:150',
            'btn3'=>'nullable|max:150',
            'link1'=>'nullable|max:255',
            'link2'=>'nullable|max:150',
            'img1'=>'nullable|max:50',
            'img2'=>'nullable|max:50',
        ]);
        SingleSection::insert([
            'lebel'=>$request->lebel,
            'title'=>$request->title,
            'section_id'=>$request->section_id,
            'short_description'=>$request->short_description,
            'btn1'=>$request->btn1,
            'btn2'=>$request->btn2,
            'btn3'=>$request->btn3,
            'link1'=>$request->link1,
            'link2'=>$request->link2,
            'img1'=>$request->img1,
            'img2'=>$request->img2,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function published()
    {
       try
        {
            $SingleSection = SingleSection::where('section_id',1)->first();
            $data = ['data'=> $SingleSection];
            // return  $data;
            $content = View::make('fontend.section.homePageSection.s1Left.s1LeftTemplate',$data)->render();

            // Path to the new static Blade view file
            $path = resource_path('views/fontend/section/homePageSection/s1Left/s1Left.blade.php');

            // Write the rendered content to the Blade view file
            file_put_contents($path, $content);
            return back()->with('success','Published Successfully');
        }
        catch(Exception $e)
        {
            $message = $e->getMessage();
            return back()->with('error',$message);
        }
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'lebel'=>'required|max:40',
            'title'=>'required|max:150',
            'short_description'=>'required|max:600',
            'btn1'=>'nullable|max:150',
            'link1'=>'nullable|max:255',
            'btn2'=>'nullable|max:150',
            'link2'=>'nullable|max:255',
        ]);

        try {
            $SingleSection = SingleSection::findOrFail($id);
            $SingleSection->fill($validatedData)->save();

            return back()->with('success','Updated successfully');
        }
        catch (Exception $e)
        {
            return back()->with('error',$e->getMessage());
        }
    }

}
