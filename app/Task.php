<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
        'photos_id',
        'name',
        'description',
        'done',
        'author_id',
        'category_id'
    ];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
    public function categories() {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }
    public function photo()
    {
        return $this->belongsTo('App\Photos');
    }

    public function scopeDone($query, $flag)
    {
        return $query->where('done', $flag);
    }
}
