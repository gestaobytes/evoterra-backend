<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Itemsgallery extends Model
{
    
    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'itemsgalleries';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'gallery_id',
		 'src',
		 'legend',
		 'credit',
         
    ];
    

	public function galery()
	{
		return $this->belongsTo(Galery::class);
	}
     
}
