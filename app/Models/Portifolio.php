<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portifolio extends Model
{
    
    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'portifolios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        
		 'clientname',
		 'titlework',
		 'work',
		 'link',
		 'resume',
		 'city',
		 'uf',
         
    ];
    
     
}
