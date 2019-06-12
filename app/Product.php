<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'description',
        'provider',
        'price'
    ];
    
    protected $dates = ['created_at', 'deleted_at'];
}
