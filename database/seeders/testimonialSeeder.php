<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class testimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oem =[
            [
                'client_name'  =>'Prakash singh',
                'profession' => 'PLUMBER',
                'image' => './newdesigin/img/testimonial/01.jpg',
                'text' =>'Really great company. They arrived on time and saved me an enormous amount of anxiety and money. I would recommend to anyone who needs a professional and honest plumber.'
            ],
            [
                'client_name'  =>'Chetan Sundar',
                'profession' => 'PLUMBER',
                'image' => './newdesigin/img/testimonial/05.jpg',
                'text' =>'There’s so much to say, I could write a short story here. In a time when customer service isn’t really commonplace; this company takes it up past the top notch. From the first phone call and friendly voice on the line, things were great. …'
            ],
            [
                'client_name'  =>'Mukesh Lal',
                'profession' => 'PLUMBER',
                'image' => './newdesigin/img/testimonial/04.jpg',
                'text' =>'मैं इस कंपनी द्वारा हमेशा प्रदान की जाने वाली कड़ी मेहनत, दयालुता और व्यावसायिकता की बहुत सराहना करता हूं। उनकी अत्यधिक अनुशंसा करें।'
            ],
            [
                'client_name'  =>'Abhilasha Kunwar',
                'profession' => 'BUILDER',
                'image' => './newdesigin/img/testimonial/03.jpg',
                'text' =>'I called on Tuesday, they were here the same morning to estimate the work and all work was completed by Thursday! Very professional operation. Willy really knew what he was doing. On-time for all appointments. We will definitely use them'
            ],
            [
                'client_name'  =>'vinod Charan',
                'profession' => 'CIVIL CONTRACTOR',
                'image' => './newdesigin/img/testimonial/02.jpg',
                'text' =>'This is the only plumbing company we will ever use. Everyone from customer service reps to the service techs are incredibly friendly, helpful, knowledgeable, and take a personal interest in making sure their customers are satisfied.'
            ],

        ];




        DB::table('testimonials')->truncate();
        DB::table('testimonials')->insert($oem);
    }
}
