<?php

namespace App\Http\Controllers\DashboardControllers;

use App\Http\Controllers\Controller;
use App\Models\GenarelInfo;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        return view('dashboard.system.information.index',[
            'informations' => GenarelInfo::all()
        ]);
    }
    public function edit($enId){
        $id = decrypt($enId);
        return view('dashboard.system.information.edit',[
            'information' => GenarelInfo::find($id)
        ]);
    }
    public function update(Request $request,$id){
       $info        =  GenarelInfo::find($id);

       $info->value         = $request->value;
       $info->updated_by    = auth()->id();
       $info->save();
       return redirect()->route('info-setup.index')->with('success','update successfully');
    }
}
