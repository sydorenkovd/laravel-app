<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Task
 *
 * @mixin \Eloquent
 * @property  $date
 */
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

    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photo()
    {
        return $this->belongsTo('App\Photos', 'photos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @param $query
     * @param $flag
     * @return mixed
     */
    public function scopeDone($query, $flag)
    {
        return $query->where('done', $flag);
    }
}
