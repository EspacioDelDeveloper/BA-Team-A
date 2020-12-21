<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    //

    protected $filleable=['recruiter_id'];

    //Relations
    public function recruiter(){
        return $this->belongsTo(Recruiter::class);
    }

    public function offers(){
        return $this->hasMany(Offer::class);
    }
}
