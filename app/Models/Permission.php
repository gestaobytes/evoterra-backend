<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Permission extends Model
{
    public $timestamps = false;
    use  HasFactory, Notifiable;

    protected $table = 'permissions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',

		 'name',
		 'description',
    ];


	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}

}
