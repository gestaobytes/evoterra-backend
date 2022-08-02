<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Editorial extends Model
{
    public $timestamps = false;
    use  HasFactory, Notifiable;

    protected $table = 'editorials';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'name',
		 'slug',
		 'order',
         
    ];
    

	public function posts()
	{
		return $this->hasMany(Post::class);
	}
     
}
