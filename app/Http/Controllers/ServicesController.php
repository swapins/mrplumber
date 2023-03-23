<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
use App\Models\cmsText;
use App\Models\Brand;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\Blog;

class ServicesController extends Controller
{
    public function home(){
        $services = services::all();
        $cmsText = cmsText::first();
        $brands = Brand::where('enable',1)->get();
        $faqs = Faq::all();
        $testimonial = Testimonial::all();
        $blog = Blog::inRandomOrder()->limit(3)->get();;
        return view('welcome.pages.newhome',compact('services','cmsText','brands','faqs','testimonial','blog'));

    }

    public function about(){
        $services = services::all();
        $cmsText = cmsText::first();
        $brands = Brand::where('enable',1)->get();
        $faqs = Faq::all();
        return view('welcome.pages.about',compact('services','cmsText','brands','faqs'));

    }

    public function brand(Request $request){
        $services = services::all();
        $cmsText = cmsText::first();
        $brands = Brand::where('enable',1)->get();
        $ebrand = Brand::find($request->input('id'));
        $faqs = Faq::all();

        $id = $request->input('id');
        if ($id == 0){
            return view('welcome.pages.brandnew',compact('services','cmsText','brands','faqs','ebrand'));
        } else{
            return view('welcome.pages.brand',compact('services','cmsText','brands','faqs','ebrand'));
        }

    }

    public function service(Request $request){
        $services = services::all();
        $service = services::find($request->input('id'));
        $cmsText = cmsText::first();
        $brands = Brand::where('enable',1)->get();
        $ebrand = Brand::find($request->input('id'));
        $faqs = Faq::all();

        $id = $request->input('id');
        if ($id == 0) {
            return view('welcome.pages.servicenew',compact('services','service','cmsText','brands','faqs','ebrand'));
        }else{
        return view('welcome.pages.service',compact('services','service','cmsText','brands','faqs','ebrand'));
        }

    }

    public function contact(Request $request){
        $services = services::all();
        $service = services::find($request->input('id'));
        $cmsText = cmsText::first();
        $brands = Brand::where('enable',1)->get();
        $ebrand = Brand::find($request->input('id'));
        $faqs = Faq::all();
        return view('welcome.pages.contact',compact('services','service','cmsText','brands','faqs','ebrand'));

    }

    public function quote(Request $request){
        $services = services::all();
        $service = services::find($request->input('id'));
        $cmsText = cmsText::first();
        $brands = Brand::where('enable',1)->get();
        $ebrand = Brand::find($request->input('id'));
        $faqs = Faq::all();
        return view('welcome.pages.quote',compact('services','service','cmsText','brands','faqs','ebrand'));

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

        $faqs = Faq::all();

        if ($service == null){
            return redirect('/');
        }
        else{
            return view('welcome.pages.services',compact('services','service','cmsText','brands','faqs'));
        }

    }

    public function db(){
        return view('service_db');
    }
}
