<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    
    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'testimonials';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'client',
		 'company',
		 'image',
		 'text',
         
    ];
    
     
}
