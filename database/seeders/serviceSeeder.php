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
                'dec'=> 'A residential plumber installs, repairs, fits, and maintains pipes in a drainage system for residential buildings. They also do fixtures associated with water heating and cooling, water distribution, and sanitation services. Their duties and responsibilities include interpreting blueprints and building specifications to draw a map layout, documenting problems, and inspecting drainage systems.',
                'enable'=>true,
                'imagePath'=>'',
            ],

            [
                'serviceName' =>'Sewage water plumbing',
                'iconName' =>'recycle',
                'dec'=> 'Sewerage and drainage systems are used to carry waste from building to public sewer system. Where public sewerage does not exist, the disposal is made into septic tank, socking pits etc. (Individual disposal system). The following are systems of sewerage and plumbing.',
                'enable'=>true,
                'imagePath'=>'',
            ],

            [
                'serviceName' =>'Galvanized plumbing',
                'iconName' =>'moisture',
                'dec'=> 'No piping system lasts forever, but galvanized pipes have a life span of between 40 to 100 years. If your home’s pipes are from the 1960s or earlier, they are likely nearing the end of their functional life span. However, there’s a reason galvanized pipes are no longer used in modern construction: the risk they pose to a home’s water supply and people’s health.',
                'enable'=>true,
                'imagePath'=>'',
            ],

            [
                'serviceName' =>'Repair Works',
                'iconName' =>'wrench-adjustable',
                'dec'=>'Whether you intend to hire a pro or do the work yourself, it’s helpful to have a clear understanding of how plumbing systems work. This will not only help you sort out the source of the problem but it will also help you speak articulately with a plumber or a salesperson at a home improvement center.',
                'enable'=> true,
                'imagePath'=>'',
            ],

        ]; 
        DB::table('services')->truncate();
        DB::table('services')->insert($oem);
    }
}
