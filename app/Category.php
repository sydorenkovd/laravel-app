<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function photos() {
        return $this->belongsToMany('App\Photos')->withPivot('description')
            ->withTimestamps();
    }
    public function tasks() {
        return $this->belongsToMany('App\Task')->withPivot('description')
            ->withTimestamps();
    }
}
