<?php

namespace App\Models;

use App\Traits\LocalizedProperty;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use LocalizedProperty;

    protected $fillable = [
        'email',
        'phone1',
        'phone2',
        'address_uk',
        'address_en',
        'skype',
        'facebook',
        'google',
        'linkedin',
        'meta_description_uk',
        'meta_description_en',
        'meta_keywords_uk',
        'meta_keywords_en',
    ];
}
