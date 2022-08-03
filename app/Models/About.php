<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    
    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'abouts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'title',
		 'image',
		 'text',
         
    ];
    
     
}
