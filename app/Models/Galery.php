<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galery extends Model
{
    
    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'galeries';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'name',
		 'type',
         
    ];
    

	public function itemsgalleries()
	{
		return $this->hasMany(Itemsgallery::class);
	}
     
}
