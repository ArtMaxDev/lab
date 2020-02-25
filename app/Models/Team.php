<?php

namespace App\Models;

use App\Traits\LocalizedProperty;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 *
 * @package App\Models
 * @mixin \Eloquent
 */
class Team extends Model
{
    use LocalizedProperty;

    protected $fillable = [
        'image',
        'name_en',
        'name_uk',
        'description_en',
        'description_uk',
    ];
}
