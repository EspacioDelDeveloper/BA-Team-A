<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $filleable = ['description', 'name', 'slug', 'excerpt', 'image', 'url', 'user_id'];

    //Relations
    public function user(){
        return $thid->belongsTo(User::class);
    }
}
