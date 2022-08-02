<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Portifolio extends Model
{
    public $timestamps = false;
    use  HasFactory, Notifiable;

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
