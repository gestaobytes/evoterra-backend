<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    
    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'name',
		 'image',
		 'minibio',
		 'instagram',
		 'linkedin',
		 'facebook',
		 'twitter',
		 'email',
		 'cellphone',
         
    ];
    
     
}
