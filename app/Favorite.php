<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
      protected $guarded = [];

      public function attraction() {
        return $this->belongsTo(Attraction::class);
      }

      public function user() {
        return $this->belongsTo(User::class);
      }
}
