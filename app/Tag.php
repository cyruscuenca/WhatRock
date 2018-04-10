<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['content', 'id'];
    public function entry()
    {
    	return $this->belongsToMany(Entry::class);
    }
}
