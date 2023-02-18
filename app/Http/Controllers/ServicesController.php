<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;

class ServicesController extends Controller
{
    public function home(){
        $services = services::all();

        return view('welcome.pages.home',compact('services'));

    }
    
    public function index(Request $request){
        
        $id = $request->input('id');
        if ($id == 0){
            dd("view missing");
        }
        $services = services::all();
        $service = services::find($id);
        if ($service == null){
            return redirect('/');
        }
        else{
            return view('welcome.pages.services',compact('services','service'));
        }
        
    }
}
