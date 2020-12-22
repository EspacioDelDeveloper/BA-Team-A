<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $fillable = ['estados' ];


    //Relations

    public function roles(){
        return $this->hasMany(Role::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

}


