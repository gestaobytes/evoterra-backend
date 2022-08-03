<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use SoftDeletes, HasFactory, Notifiable, HasApiTokens;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'fullname',
        'email',
        'status',
        'password',
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class)->withPivot('id');
    }

    public function permissions()
    {
        return $this->hasManyThrough(Permission::class, Role::class);
    }
}
