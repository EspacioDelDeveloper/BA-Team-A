<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $filleable=['joboffer_id'];

    //Relations
    public function joboffer(){
        return $this->belongsTo(JobOffer::class);
    }

   
}
