<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    //Faltan atributos
    
    //Relations
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    public function joboffer(){
        return $this->hasOne(JobOffer::class);
    }
}
