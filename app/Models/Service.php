<?php

namespace App\Models;

use App\Traits\LocalizedProperty;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @package App\Models
 * @mixin \Eloquent
 */
class Service extends Model
{
    use LocalizedProperty;

    protected $fillable = [
        'title_uk',
        'title_en',
        'text_uk',
        'text_en',
        'meta_title_uk',
        'meta_title_en',
        'meta_description_uk',
        'meta_description_en',
        'meta_keywords_uk',
        'meta_keywords_en',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', '!=', 0);
    }
}
