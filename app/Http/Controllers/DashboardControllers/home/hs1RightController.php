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
    public function edit(Request $request, string $id)
    {
        $banner = Banner::where('section_id',2)->findOrFail($id);
        $data = ['banner'=> $banner];
        return view('dashboard.pages.home.section1.right.edit',$data);
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
        try
        {
            $request->validate([
                'image_name'=>'required|mimes:png,jpg'
            ]);
            $banner = Banner::findOrFail($id);
            if ($request->hasFile('image_name')) {
                $manager = new ImageManager(new Driver());
                $image_file = $request->file('image_name');
                $image_name = Str::random(15).'.'.$image_file->getClientOriginalExtension();
                $image = $manager->read($image_file);
                // $image = $image->resize(300,300);

                $path = base_path('public/assets/images/banners/' . $image_name);
                $image->save($path);
                $file_location = base_path('public/assets/images/banners/' .  $banner->image_name);
                // unlink($file_location);
            }

            $banner->image_name= $image_name;
            $banner->save();
            return redirect()->route('homeS1Right.index')->with('success','Updated successfully');
        }
        catch(Exception $e)
        {
            return back()->with('error',$e->getMessage());
        }
    }
    public function destroy(Request $request, string $id){
        Banner::findOrFail($id)->delete();
        return back()->with('success','Deleted successfully');
    }

}
