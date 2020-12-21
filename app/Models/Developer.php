<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    //
    protected $filleable = ['area', 'language', 'framework', 'other'];

    //Relations

    public function user(){
        return belongsTo(User::class);
    }

    public function portfolio(){
        return $this->hasOne(Portfolio::class);
    }
}
