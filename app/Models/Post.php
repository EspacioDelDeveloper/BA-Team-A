<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'category_id', 'name', 'slug', 'excerpt', 'description', 'status', 'file',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function recruiters(){
        return $this->belongsToMany(Recruiter::class);
    }
}
