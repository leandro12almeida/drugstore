<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drugstore extends Model
{
    protected $table = 'drugstores';
    
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'description',
    ];
    
    protected $dates = ['created_at', 'deleted_at'];
}
