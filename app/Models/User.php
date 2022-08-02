<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class User extends Model
{
    public $timestamps = false;
    use  HasFactory, Notifiable;

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
		return $this->ManyToMany(Role::class);
	}
     
}
