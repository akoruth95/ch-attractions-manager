<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Attraction;


class AttractionsController extends Controller
{
    public function getByCategory($category) {
      //echo $category;
      $attractions = Attraction::where('category', $category)->get();
      return Response::json($attractions);
    }
}
