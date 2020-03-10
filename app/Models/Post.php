<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    protected $fillable = ['title','content','likes','created_at','updated_at'];
    public function ShowOneImage()
    {
        return $this->hasMany('App\Models\Post_image', 'post_id', 'id');
    }
}
