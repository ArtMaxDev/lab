<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
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
        'meta_description',
        'meta_description_en',
        'meta_keywords',
        'meta_keywords_en',
    ];
}
