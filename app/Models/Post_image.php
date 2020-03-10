<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post_image extends Model
{
    protected $table="post_images";
    protected $fillable = ['post_id','url','created_at','updated_at'];
}
