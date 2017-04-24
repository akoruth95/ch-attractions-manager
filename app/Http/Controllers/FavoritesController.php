<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

use App\Favorite;
use App\Attraction;

class FavoritesController extends Controller
{
    public function createFavorite($attraction_id) {
      $id = Auth::id();

      $attraction = Attraction::find($attraction_id);
      $attraction->favorites()->create([
          'attraction_id' => $attraction_id,
          'user_id' => $id
      ]);

      return Response::json(['favorite_created' => true]);
    }

    public function destroyFavorite($attraction_id) {
      $id = Auth::id();

      Favorite::where('attraction_id', $attraction_id)->where('user_id', $id)->delete();

      return Response::json(['favorite_deleted' => true]);
    }

    public function getFavorite($attraction_id) {
      $id = Auth::id();

      $favorite = Favorite::where('attraction_id', $attraction_id)->where('user_id', $id)->get();

      return Response::json($favorite);
    }
}
