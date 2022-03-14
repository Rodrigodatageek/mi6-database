<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    use HasFactory;


    public function Alias() 
    {
        return $this->belongsTo(Person::class, 'id');
    }


}


// Person has many Aliases