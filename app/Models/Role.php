<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Role extends Model
{
    public $timestamps = false;
    use  HasFactory, Notifiable;

    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'name',
		 'description',
         
    ];
    

	public function permissions()
	{
		return $this->ManyToMany(Permission::class);
	}

	public function users()
	{
		return $this->ManyToMany(User::class);
	}
     
}
