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
        'url',
        'url_target',
        'title_uk',
        'title_en',
        'description_uk',
        'description_en',
        'text_uk',
        'text_en',
        'meta_title_uk',
        'meta_title_en',
        'meta_description_uk',
        'meta_description_en',
        'meta_keywords_uk',
        'meta_keywords_en',
        'status',
    ];

    public function scopePublished(Builder $query)
    {
        return $query->where('status', '!=', 0);
    }

    public function getImage(): ?string
    {
        if ($this->image) {
            return Str::endsWith($this->image, '.png') ? $this->image : "{$this->image}.jpg";
        }
        return null;
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
