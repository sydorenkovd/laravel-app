<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
class Photos extends Model{
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
}