<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
	protected $fillable = ['name', 'slug',];
    public function entry()
    {
    	return $this->belongsToMany(Entry::class);
    }
}