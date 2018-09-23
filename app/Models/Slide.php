<?php

namespace App\Models;

use App\Traits\LocalizedProperty;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use LocalizedProperty;

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
