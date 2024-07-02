<?php

namespace App\Http\Controllers\DashboardControllers\home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class hs1RightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::where('section_id',2)->get();
        $banners = ['banners'=> $banners];
        return view('dashboard.pages.home.section1.right.index',$banners);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            $request->validate([
                'image_name'=>'required|mimes:png,jpg'
            ]);
            if ($request->hasFile('image_name')) {
                $manager = new ImageManager(new Driver());
                $image_file = $request->file('image_name');
                $image_name = Str::random(15).'.'.$image_file->getClientOriginalExtension();
                $image = $manager->read($image_file);
                // $image = $image->resize(300,300);

                $path = base_path('public/assets/images/banners/' . $image_name);
                $image->save($path);
            }

            Banner::insert([
                'image_name'=>$image_name,
                'section_id'=>2,
                'status_active'=>1,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('success','Added successfully');
        }
        catch(Exception $e)
        {
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function published()
    {
        try
         {
             $Banner = Banner::where(['section_id'=>2,'status_active'=>1])->get();
             $data = ['banners'=> $Banner];
             // return  $data;
             $content = View::make('fontend.section.homePageSection.s1Right.s1RightTemplate',$data)->render();

             // Path to the new static Blade view file
             $path = resource_path('views/fontend/section/homePageSection/s1Right/s1Right.blade.php');

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
        /* $validatedData = $request->validate([
            'lebel'=>'required|max:40',
            'title'=>'required|max:150',
            'short_description'=>'required|max:600',
            'btn1'=>'nullable|max:150',
            'link1'=>'nullable|max:255',
            'btn2'=>'nullable|max:150',
            'link2'=>'nullable|max:255',
        ]);
        $SingleSection = SingleSection::findOrFail($id);
        $SingleSection->fill($validatedData)->save(); */

        return back()->with('success','Updated successfully');
        /* try {
            $SingleSection = SingleSection::findOrFail($id);
            $SingleSection->fill($validatedData)->save();

            return back()->with('success','Updated successfully');
        }
        catch (Exception $e)
        {
            return back()->with('success','Something went wrong');
        } */
    }

}
