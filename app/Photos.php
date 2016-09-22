<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * App\Photos
 *
 * @mixin \Eloquent
 */
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
    public function getFulldescriptionAttribute() {
        return $this->title . ' ' . $this->description;
    }
}