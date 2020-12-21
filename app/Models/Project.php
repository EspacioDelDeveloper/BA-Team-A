<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $filleable = ['description', 'name', 'slug', 'excerpt', 'image', 'url', 'portfolio_id'];

    //Relations
    public function portfolio(){
        return $thid->belongsTo(Portfolio::class);
    }
}
