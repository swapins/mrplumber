<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cmsText extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "subTitle",
        "aboutUsText",
        "addressText",
        "phoneNo",
        "email",
        "twitter",
        "facebook",
        "instagram",
        "linkedIn",
        "copyRight",
        "videourl"
    ];
}
