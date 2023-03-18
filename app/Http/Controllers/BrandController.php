<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Brand;
use App\Models\brandImage;
use App\Models\Blog;
use App\Models\cmsText;
use App\Models\contactForm;
use DOMDocument;
use DOMXpath;


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
            $image = $dom->getElementsByTagName('img');
            // Restore error level
            libxml_use_internal_errors($internalErrors);
            $array_title = iterator_to_array($title);
            // $array_image = iterator_to_array($image);

            // foreach($array_image as $a){
            //     try{
            //         do {
            //                 $lmt = 0;
            //                 $url = $a->attributes->getNamedItem('src')->nodeValue;
            //                 $ch = curl_init();
            //                 curl_setopt($ch, CURLOPT_URL,$url);
            //                 // don't download content
            //                 curl_setopt($ch, CURLOPT_NOBODY, 1);
            //                 curl_setopt($ch, CURLOPT_FAILONERROR, 1);
            //                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            //                 $result = curl_exec($ch);
            //                 curl_close($ch);
            //                 if($result !== FALSE)
            //                 {
            //                     $validimages[] =array("brand_id" => $brand->id , "image_url" => $url);
            //                     $lmt++;
            //                 }
            //         }while($lmt>2);

            //         }
            //     catch (Exception $ignored)
            //     {
            //         // do nothing... php will ignore and continue
            //         // but maybe use "ignored" as name to silence IDE warnings.
            //     }

            // }

            //chech link for image
            //dd($validimages);

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


        return response()->json(['name' => 'success', 'status' => 'OK']);


    }

    public function brandImages(){

            $brands = Brand::all();
            foreach($brands as $brand){

                $response = Http::get($brand->url);
                $dom = new DOMDocument('1.0', 'UTF-8');
                // set error level
                $internalErrors = libxml_use_internal_errors(true);
                $dom->loadHTML($response);
                $title = $dom->getElementsByTagName('title');
                $image = $dom->getElementsByTagName('img');
                // Restore error level
                libxml_use_internal_errors($internalErrors);
                //$array_title = iterator_to_array($title);
                $array_image = iterator_to_array($image);
                foreach($array_image as $a){
                    try{
                        if ($a->attributes->getNamedItem('src') != null){
                            $validimages[] =array("brand_id" => $brand->id , "image_url" => $a->attributes->getNamedItem('src')->nodeValue);
                        }
                    }catch (Exception $ignored){

                    }

                }
            }

            brandImage::truncate();
            //dd(array_values($validimages));
            foreach ($validimages as $value) {
                brandImage::create($value);
            }


            return response()->json(['name' => 'success', 'count' => brandImage::all()->count()]);

    }

    public function cleanbrandTable (){
        brandImage::chunk(10 , function($brandImage){

            foreach ($brandImage as $value) {
                $url = $value->image_url;
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL,$url);
                // don't download content
                curl_setopt($ch, CURLOPT_NOBODY, 1);
                curl_setopt($ch, CURLOPT_FAILONERROR, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                if($result !== FALSE)
                    {
                        brandImage::find($value->id)->update(["verified" => true]);
                    }
                else{
                        brandImage::find($value->id)->delete();
                }
            }
        });

        return response()->json(['name' => 'success', 'count' => brandImage::all()->count()]);
    }

    public function index(){
        return view('brand');
    }

    public function getBlog(){

        Blog::truncate();

        $config['useragent'] = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';

        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://trustedpros.ca/articles/plumbing");
        curl_setopt($ch, CURLOPT_USERAGENT, $config['useragent']);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
//print_r($output);

    $dom = new DOMDocument('1.0', 'UTF-8');

    $internalErrors = libxml_use_internal_errors(true);
    $dom->loadHTML($output);

    $finder = new DomXPath($dom);
    $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), 'articl-sec')]");
    libxml_use_internal_errors($internalErrors);


    foreach ($nodes as $node) {
        # code...
        $imageNode = $this->getAttachableNodeByAttributeName($node, 'img');
        $TitleNode = $this->getAttachableNodeByAttributeName($node, 'div');

        $rowtext= $TitleNode->nodeValue;
        $arr = explode("\r\n",$rowtext);
        $title = str_replace("\r\n","", $arr[1]);
        $p = str_replace("\r\n","",$arr[2]);

        Blog::create([
            'Title' => filter_var($title,FILTER_SANITIZE_STRING),
            'Post'=> filter_var($p,FILTER_SANITIZE_STRING),
            'Image' => $imageNode->getAttribute('src'),
            'rowText'=> $TitleNode->nodeValue,
        ]);

        //echo $countryNode->getAttribute('src')."\n";

    }

    $data = $nodes;

    return response()->json($data, 200);


    }

    private function getAttachableNodeByAttributeName(\DOMElement $parent = null, string $elementTagName = null, string $attributeName = null, string $attributeValue = null)
    {
    $returnNode = null;

    $needleDOMNode = $parent->getElementsByTagName($elementTagName);

    $length = $needleDOMNode->length;
    //traverse through each existing given node object
    for ($i = $length; --$i >= 0;) {

        $needle = $needleDOMNode->item($i);

        //only one DOM node and no attributes specified?
        if (!$attributeName && !$attributeValue && 1 === $length) return $needle;
        //multiple nodes and attributes are specified
        elseif ($attributeName && $attributeValue && $needle->getAttribute($attributeName) === $attributeValue) return $needle;
    }

    return $returnNode;
    }

    public function dbStatus(){
        $blog = Blog::all();
        $brand = Brand::all();
        $info = cmsText::all();
        $contact = contactForm::all();

        $payload = [

            [
                'Name' => "Blogs",
                'Record Count' =>  $blog->count(),
                'Status' =>  "OK",
            ],

            [
                'Name' => "Brands",
                'Record Count' =>  $brand->count(),
                'Status' =>  "OK",
            ],

            [
                'Name' => "Info",
                'Record Count' =>  $info->count(),
                'Status' =>  "OK",
            ],

            [
                'Name' => "Contact",
                'Record Count' =>  $contact->count(),
                'Status' =>  "OK",
            ],

        ];

        return response()->json($payload);
    }

}
