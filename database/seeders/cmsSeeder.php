<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oem = ["title" => "For Your Plumbing Needs",
        "subTitle" => "Professional, affordable and we always leave the seat down",
        "aboutUsText" =>"Mr Plumber has proudly offered home services for residential and commercial properties since 2000. We work with you to plan every step of the process and ensure that your satisfaction is met. With a team of experts and a variety of professional services available, you can be sure your house will be taken care of. In the area of ​​plumbing.",
        "addressText" => "Chaudary Market, Shop no. 1, Opposite Bhiwadi Bus stand",
        "phoneNo" => "91 9821280167",
        "email" => "adithyamangla@mrplumber.in",
        "twitter" => "",
        "facebook" =>"",
        "instagram" => "",
        "linkedIn" => "",
        "copyRight" => "adithyamangla for mr.plumber.in",
        "videourl" =>""];

        DB::table('cms_texts')->truncate();
        DB::table('cms_texts')->insert($oem);
    }
}
