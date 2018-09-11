<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'title_uk',
        'title_en',
        'description_uk',
        'description_en',
        'link',
        'image',
        'image_alt',
        'style',
        'status',
        'sorting',
    ];
}
