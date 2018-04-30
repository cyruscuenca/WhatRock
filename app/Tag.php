<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable = ['name', 'hex', 'type_id', 'id'];
	public $timestamps = false;
    public function entry()
    {
    	return $this->belongsToMany(Entry::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
