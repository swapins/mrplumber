<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oem = [
            [
                'brandName' => 'ASTRAL PIPES' ,
                'logo' => './welcome/assets/img/brands/ASTRAL.png' ,
                'url' => 'https://www.astralpipes.com/',
                'curatedText' => '',
                'enable'=>true
            ],
            [
                'brandName' => 'CERA' ,
                'logo' => './welcome/assets/img/brands/Cera.png' ,
                'url' => 'https://www.cera-india.com/home',
                'curatedText' => '',
                'enable'=>true
            ],
            [
                'brandName' => 'GRAFDOER' ,
                'logo' => './welcome/assets/img/brands/Grafdoer.jpg' ,
                'url' => 'https://www.grafdoer.com/',
                'curatedText' => '',
                'enable'=>true
            ],
            [
                'brandName' => 'GROHE' ,
                'logo' => './welcome/assets/img/brands/Grohe.png' ,
                'url' => 'https://www.grohe.co.in/en_in/',
                'curatedText' => '',
                'enable'=>true
            ],
            [
                'brandName' => 'HINDWARE' ,
                'logo' => './welcome/assets/img/brands/Hindware.png' ,
                'url' => 'https://hindware.com/',
                'curatedText' => '',
                'enable'=>true
            ],
            [
                'brandName' => 'JAGUAR' ,
                'logo' => './welcome/assets/img/brands/jaguar.png' ,
                'url' => 'https://www.jaquar.com/en/',
                'curatedText' => '',
                'enable'=>true
            ],
            [
                'brandName' => 'PARRYWARE' ,
                'logo' => './welcome/assets/img/brands/parrywear.png' ,
                'url' => 'https://www.parryware.in/',
                'curatedText' => '',
                'enable'=>true
            ],
            [
                'brandName' => 'PRINCE PIPING' ,
                'logo' => './welcome/assets/img/brands/PRINCE.png' ,
                'url' => 'https://www.princepipes.com/',
                'curatedText' => '',
                'enable'=>true
            ],
            [
                'brandName' => 'SUPREME PIPING' ,
                'logo' => './welcome/assets/img/brands/supreme.png' ,
                'url' => 'https://www.supreme.co.in/',
                'curatedText' => '',
                'enable'=>true
            ],
            [
                'brandName' => 'TOTO' ,
                'logo' => './welcome/assets/img/brands/toto.png' ,
                'url' => 'https://in.toto.com/',
                'curatedText' => '',
                'enable'=>true
            ],
            [
                'brandName' => 'TOYO' ,
                'logo' => './welcome/assets/img/brands/toyo-logo-new.jpg' ,
                'url' => 'https://www.toyosanitarywares.co.in/',
                'curatedText' => '',
                'enable'=>true
            ]

        ];

        DB::table('brands')->truncate();
        DB::table('brands')->insert($oem);
    }
}
