<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function category1(){
        return $this->belongsTo(Category::class,'category');
    }

    public function sub_category1(){
        return $this->belongsTo(SubCategory::class,'sub_category');
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'post_id');
    }
}
