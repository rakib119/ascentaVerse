<?php

use App\Models\DeletePhotoLink;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

if (!function_exists('uploadImage')) {
    function uploadImage($basepath,$request,$field_name)
    {
        try {
            if ($request->hasFile($field_name))
            {
                $manager = new ImageManager(new Driver());
                $image_file = $request->file($field_name);
                $image_name = Str::random(15).'.'.$image_file->getClientOriginalExtension();
                $image = $manager->read($image_file);
                $path = base_path($basepath . $image_name);
                $image->save($path);
                return "1*".$image_name;
            }
            else{
                return "1*0";
            }
        } catch (Exception $e)
        {
            return $e->getMessage();
        }
    }
}
if (!function_exists('insertDeleteLink')) {
    function insertDeleteLink($file_location,$section_id)
    {
        try {
            DeletePhotoLink::insert([
                'link'=> $file_location,
                'section_id'=> $section_id,
                'created_by'=> auth()->id(),
                'created_at'=> Carbon::now(),
            ]);
            return 1;
        } catch (Exception $e)
        {
            return $e->getMessage();
        }
    }
}
if (!function_exists('changeStatus')) {
    function changeStatus($table_name, $idArray,$status_id=0)
    {
        try {
            DB::table($table_name)
                ->whereIn('id',$idArray)
                ->update
                (
                    [
                        'status_active' => $status_id,
                        'updated_by' => auth()->id(),
                        'updated_at' => Carbon::now(),
                    ]
                );

            return 1;
        } catch (Exception $e)
        {
            return $e->getMessage();
        }
    }
}
if (!function_exists('deleteFile')) {
    function deleteFile($section)
    {
        try {
            $links = DeletePhotoLink::where(['section_id'=>$section,'status_active'=>1])->get()->toArray();
            $idArray = array();
            foreach ($links as $v) {
                $idArray[$v['id']] = $v['id'];
                if(file_exists($v['link']))
                {
                    unlink($v['link']);
                }
            }
            changeStatus('delete_photo_links', $idArray,0);
            return 1;
        } catch (Exception $e)
        {
            return $e->getMessage();
        }


    }
}
if (!function_exists('returnArray')) {
    function returnArray($table_name,$columns,$key,$value, $cond='')
    {
        try {

           return $data = DB::raw("select $columns form $table_name  $cond");

        } catch (Exception $e)
        {
            return $e->getMessage();
        }


    }
}

?>
