<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function entry()
    {
    	return $this->belongsToMany(Entry::class);
    }
}
