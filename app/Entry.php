<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Entry extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $fillable = ["title", "body", "photo_id"];
        
    public function category()
    {
    	return $this->belongsToMany(Category::class);
    }

    public function photo()
    {
    	return $this->belongsTo(Photo::class);
    }
}
