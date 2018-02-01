<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['title', 'photo'];

    public function entry()
    {
    	return $this->belongsTo(Entry::class);
    }
	public function photo()
	{
	    return $this->photo->photo;
	}
}
