<?php
namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
/**
 * App\Photos
 *
 * @mixin \Eloquent
 * @property  $date
 */
class Photos extends Model
{
    use Sluggable;

    protected $table = 'photos';
    protected $fillable = [
        'title',
        'description',
        'location',
        'image',
        'owner_id',
        'gallery_id',
    ];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
    protected $sluggable = array(
        'build_from' => 'title',
        'save_to' => 'slug',);

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks() {
        return $this->hasMany('App\Task');
//            ->where('photos_id', 1);
    }
    public function categories() {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function getFulldescriptionAttribute()
    {
        return $this->title . ' ' . $this->description;
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = '' . $title;
    }
/**
 * Carbon test for no reason
 */
//    public function isDueToday()
//    {
//        $now = Carbon::now();
//        if ($this->date->diff($now)->days == 0) {
//            return true;
//        } else {
//            return false;
//        }
//    }
}