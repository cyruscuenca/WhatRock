<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['id', 'name'];
	public $timestamps = false;
    public function tag()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
