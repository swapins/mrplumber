<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactForm;

class ContactFormController extends Controller
{
    public function index(){
        return view('leads');
    }

    public function destroy(Request $request){
        $id = $request->input('contact-form');
        $record = contactForm::find($id);
        $record->delete();
        return redirect()->back();
    }
}
