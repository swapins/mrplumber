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
        "aboutUsText" =>"Mr Plumber has proudly offered home services for residential and commercial properties since 2000. We work with you to plan every step of the process and ensure that your satisfaction is met. With a team of experts and a variety of professional services available, you can be sure your house will be taken care of. In the area of ​​plumbing, we offer you, among other things:
            All plumbing services
            Connection and replacement of fittings
            Connection and replacement of radiators
            Connection and repair of gas stoves and pipes
            Connection and repair of gas stoves and pipes
            Connection and repair of gas stoves and pipes
            From the smallest to the largest task, we believe your home deserves top-priority service that is efficient and reliable. This is why we started Mr Plumber, to deliver quality professional services that you can trust.",
        "addressText" => "address adresss",
        "phoneNo" => "+91819281982",
        "email" => "email@email.com",
        "twitter" => "",
        "facebook" =>"",
        "instagram" => "",
        "linkedIn" => "",
        "copyRight" => "mr plumber",
        "videourl" =>""];

        DB::table('cms_texts')->truncate();
        DB::table('cms_texts')->insert($oem);
    }
}
