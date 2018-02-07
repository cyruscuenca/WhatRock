<?php

namespace App;

use App\Category;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
	protected $fillable = ['name', 'slug',];
    public function entry()
    {
    	return $this->belongsTo(Category::class);
    }
}
