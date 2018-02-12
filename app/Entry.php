<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Entry extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'alt_title', 'summary', 'body', 'photo_id', 'slug', 'status'];
        
    public function category()
    {
    	return $this->belongsToMany(Category::class);
    }

    public function color()
    {
        return $this->belongsToMany(Color::class);
    }

    public function streak()
    {
        return $this->belongsToMany(Streak::class);
    }

    public function lustre()
    {
    	return $this->belongsToMany(Lustre::class);
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
}
