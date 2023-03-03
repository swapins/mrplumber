<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
use App\Models\cmsText;
use App\Models\Brand;

class ServicesController extends Controller
{
    public function home(){
        $services = services::all();
        $cmsText = cmsText::first();
        $brands = Brand::where('enable',1)->get();
        return view('welcome.pages.home',compact('services','cmsText','brands'));

    }
    
    public function index(Request $request){
        
        $id = $request->input('id');
        $brands = Brand::where('enable',1)->get();
        $cmsText = cmsText::first();
        if ($id == 0){
            dd("view missing");
        }
        $services = services::all();
        $service = services::find($id);
        if ($service == null){
            return redirect('/');
        }
        else{
            return view('welcome.pages.services',compact('services','service','cmsText','brands'));
        }
        
    }

    public function db(){
        return view('service_db');
    }
}
