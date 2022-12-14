<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    
    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'galleries';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'type',
		 'title',
		 'slug',
		 'exibetitle',
         
    ];
    

	public function itemsgalleries()
	{
		return $this->hasMany(Itemsgallery::class);
	}
     
}
