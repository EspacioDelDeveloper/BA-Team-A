<?php

namespace App;

use Iluminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = ['name', 'id_estado'];

    //Relattions 
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    
    
}
