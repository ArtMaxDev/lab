<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'message',
        'admin_message',
        'status',
    ];
}
