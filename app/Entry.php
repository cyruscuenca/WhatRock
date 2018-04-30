<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Entry extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'alt_title', 'summary', 'body', 'photo_id', 'slug', 'status'];

	public function tag()
    {
    	return $this->belongsToMany(Tag::class);
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
}
