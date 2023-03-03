<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index(){
        return view('faq');
    }

    public function save(Request $request){

        Faq::create([
            'question' => $request->input("first-name"),
            'answer'=> $request->input("last-name"),
        ]);
        return redirect()->back();
    }

    public function edit(Request $request){

       dd($request);
        return redirect()->back();
    }

    public function delete(Request $request){

        dd($request);
         return redirect()->back();
     }
}
