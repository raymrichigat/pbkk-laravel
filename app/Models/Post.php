<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'blog_posts';
    protected $fillable = ['title', 'author', 'slug', 'body'];
  }