<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Brand;
use DOMDocument;

class BrandController extends Controller
{
    public function brandSites(Request $request){


        $brands = Brand::all();

        foreach ($brands as $brand) {
            $response = Http::get($brand->url);
        
            $dom = new DOMDocument('1.0', 'UTF-8');

            // set error level
            $internalErrors = libxml_use_internal_errors(true);
            $dom->loadHTML($response);
            $title = $dom->getElementsByTagName('title');
           // $image = $dom->getElementsByTagName('img');
            // Restore error level
            libxml_use_internal_errors($internalErrors);
            $array_title = iterator_to_array($title);
            //$array_image = iterator_to_array($image);


           $brand->update(
            ['curatedText'=> $array_title [0]->textContent]
           ) ;
        }


        // $response = Http::get('https://hindware.com/');
        
        // $dom = new DOMDocument('1.0', 'UTF-8');

        // // set error level
        // $internalErrors = libxml_use_internal_errors(true);
        // $dom->loadHTML($response);
        // $title = $dom->getElementsByTagName('title');
        // $image = $dom->getElementsByTagName('img');
        // // Restore error level
        // libxml_use_internal_errors($internalErrors);
        // $array_title = iterator_to_array($title);
        // $array_image = iterator_to_array($image);

        //$array_image[2]->attributes->getNamedItem('src')->nodeValue
        //$array[0]->textContent

        
        dd('done');


    }

    public function index(){
        return view('brand');
    }
}
