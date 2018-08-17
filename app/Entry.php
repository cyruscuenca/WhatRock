<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Entry extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'alt_title', 'summary', 'body', 'photo_id', 'slug', 'status', 'user_id'];

	public function tag()
    {
    	return $this->belongsToMany(Tag::class);
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getCategoryAttribute()
    {
        return Entry::tag()->where('type_id', 2)->pluck('name');
    }
		public function getHexAttribute()
    {
        return Entry::tag()->where('type_id', 5)->pluck('hex');
    }
		public function getColorAttribute()
    {
        return Entry::tag()->where('type_id', 5)->pluck('name');
    }
		public function getStreakAttribute()
    {
        return Entry::tag()->where('type_id', 4)->pluck('name');
    }
		public function getLustreAttribute()
    {
        return Entry::tag()->where('type_id', 3)->pluck('name');
    }
        public function getTextcolorAttribute()
    {
        $textcolor = "#fff";
        $dbcolor = $this->tag()->where('type_id', 5)->first()->hex;
        if($dbcolor == "#fdfefe" || $dbcolor == "#FDD835" || $dbcolor == "#FBC02D")
        {
            $textcolor = "#17202a";
        }
        return $textcolor;
    }

}
