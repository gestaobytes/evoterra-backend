<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Post extends Model
{
    public $timestamps = false;
    use  HasFactory, Notifiable;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'editorial_id',
		 'intertitle',
		 'title',
		 'subtitle',
		 'slug',
		 'text',
		 'tags',
		 'image',
		 'legend',
		 'credit',
         
    ];
    

	public function editorial()
	{
		return $this->belongsTo(Editorial::class);
	}
     
}
