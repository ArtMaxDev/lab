<?php

namespace App\Models;

use App\Traits\LocalizedProperty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

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

    public function scopePublished($query)
    {
        return $query->where('status', '!=', 0);
    }

    public function getPublicatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d.m.Y');
    }

    public function setPublicatedAtAttribute($value)
    {
        $this->attributes['publicated_at'] = Carbon::parse($value)->format('Y-m-d');
    }
}
