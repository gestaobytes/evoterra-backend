<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institutiona extends Model
{
    
    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'institutional';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'mission',
		 'vision',
		 'values',
         
    ];
    
     
}
