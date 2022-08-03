<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sitepage extends Model
{
    
    use SoftDeletes, HasFactory, Notifiable;

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
