<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'image',
        'image_alt',
        'meta_title_uk',
        'meta_title_en',
        'meta_keywords_uk',
        'meta_keywords_en',
        'meta_description_uk',
        'meta_description_en',
        'title_uk',
        'title_en',
        'text_uk',
        'text_en',
        'status',
    ];
}
