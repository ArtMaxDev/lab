<?php

namespace App\Models;

use App\Traits\LocalizedProperty;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use LocalizedProperty;

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
        'publicated_at',
    ];
}
