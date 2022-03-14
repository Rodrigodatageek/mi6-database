<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;


    public function Person()
    {
        return $this->belongsTo
        (
        Image::class,
        Status::class,
        'id',
        'id',
        'id',
        'id',
        );

    }

    public function PersonHas() 
    {
        return $this->belongsTo(Alias::class, 'id');
    }

  
}


// Person belongs to Image