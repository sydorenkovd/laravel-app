<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title', 'text', 'author_id', 'note'
    ];
}
