<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $filleable=['user_id'];

    //Relations
    public function user(){
        return $this->belongsTo(User::class);
    }

   
}
