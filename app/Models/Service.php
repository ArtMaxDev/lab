<?php

namespace App\Models;

use App\Traits\LocalizedProperty;
use Illuminate\Database\Eloquent\Builder;
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
        'image',
        'text_en',
        'text_uk',
        'title_en',
        'title_uk',
        'meta_title_en',
        'meta_title_uk',
        'meta_description_en',
        'meta_description_uk',
        'meta_keywords_en',
        'meta_keywords_uk',
        'status',
    ];

    public function scopePublished(Builder $query)
    {
        return $query->where('status', '!=', 0);
    }
}
