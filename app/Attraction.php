<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $guarded = [];

    public function favorites() {
      return $this->hasMany(Favorite::class);
    }

    public function comments() {
      return $this->hasMany(Comment::class);
    }
}
