<?php

namespace App;

use Iluminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'editor',
        'administrator',
        'developer',
        'recruiter',
    ];

    //Relattions 
    
    public function users(){
        return $this->hasMany(User::class);
    }
}
