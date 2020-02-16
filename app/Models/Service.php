<?php

namespace App\Models;

use App\Traits\LocalizedProperty;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

    public function getUrl()
    {
        $currentLocale = LaravelLocalization::getCurrentLocale() ?? 'uk';

        $url = $this->id;
        if (!empty($this->url)) {
            if (Str::startsWith($this->url, 'http')) {
                return $this->url;
            }
            $url = $this->url;
        }

        return LaravelLocalization::getLocalizedURL($currentLocale, route('client.service.item', $url), [], false);
    }
}
