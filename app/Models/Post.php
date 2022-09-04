<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Mutadores - mutators
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    //Accesores - accessors
    public function getSlugAttribute()
    {   
        return str_replace(' ', '-', $this->name);
    }

    public function href()
    {
        return "blog/$this->slug";
    }
}
