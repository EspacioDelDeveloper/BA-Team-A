<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $filleable = ['description', 'name', 'slug', 'excerpt', 'image', 'developer_id'];

    //Relations
    public function developer(){
        return $this->belongsTo(Developer::class);
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
