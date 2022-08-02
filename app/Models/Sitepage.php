<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Sitepage extends Model
{
    public $timestamps = false;
    use  HasFactory, Notifiable;

    protected $table = 'sitepages';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'title',
		 'slug',
		 'text',
		 'tags',
		 'image',
		 'legend',
		 'credit',
         
    ];
    
     
}
