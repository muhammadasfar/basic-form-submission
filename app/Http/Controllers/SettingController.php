<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        return view('setting.index');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:10',
        ]);
      
    
     try{
        $inputs= $request->all();
        $setting=Setting::create($inputs);
        $message="data saved successfully";
        return view('setting.index',compact('message'));
        //return "data saved successfully.";
     } catch(\Exception $e){
        return $e;
     }

    }

}
