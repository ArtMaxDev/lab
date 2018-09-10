<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Ultraware\Roles\Models\Role;
use Ultraware\Roles\Traits\HasRoleAndPermission;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoleAndPermission;

    public const ROLES = [
        'root' => 0,
        'client' => 1,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function boot()
    {
        parent::boot();
        self::created(function ($model) {
            $role = Role::where('name', 'root')->first();
            $model->attachRole($role);
        });
    }
}
