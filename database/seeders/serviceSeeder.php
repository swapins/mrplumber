<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run()
    {
        $oem = [
            [
                'serviceName' =>'Commercial Plumbing',
                'iconName' =>' buildings',
                'dec'=> "A commercial plumber is a professional who specializes in servicing plumbing 
                            fixtures in a variety of different commercial business settings.",
                'enable'=>true,
                'imagePath'=>'',
            ],
           

            [
                'serviceName' =>'Residential Plumbing',
                'iconName' =>'house-door',
                'dec'=> Str::random(200),
                'enable'=>true,
                'imagePath'=>'',
            ],

            [
                'serviceName' =>'Sewage water plumbing',
                'iconName' =>'recycle',
                'dec'=> Str::random(200),
                'enable'=>true,
                'imagePath'=>'',
            ],

            [
                'serviceName' =>'Galvanized plumbing',
                'iconName' =>'moisture',
                'dec'=> Str::random(200),
                'enable'=>true,
                'imagePath'=>'',
            ],

            [
                'serviceName' =>'Repair Works',
                'iconName' =>'wrench-adjustable',
                'dec'=>Str::random(200),
                'enable'=> true,
                'imagePath'=>'',
            ],

        ]; 
        DB::table('services')->truncate();
        DB::table('services')->insert($oem);
    }
}
