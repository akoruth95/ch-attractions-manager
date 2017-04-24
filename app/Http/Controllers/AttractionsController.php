<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Attraction;
use App\Comment;


class AttractionsController extends Controller
{
    public function getByCategory($category) {
      //echo $category;
      $attractions = Attraction::where('category', $category)->get();

      $places = array();
      $ratingAverage;
      foreach ($attractions as &$attraction) {
        $ratingAverage = $this->getAttractionRatingAverage($attraction);
        array_push($places, array("place" => $attraction, "avgrating" => $ratingAverage));
      }

      return Response::json($places);

    }

    private function getAttractionRatingAverage($attraction) {

      $comments = Comment::where('attraction_id', $attraction['id'])->get();

      $ratingSum = 0;
      $ratingAverage;
      foreach ($comments as $comment) {
        $ratingSum += $comment['rating'];
      }

      if (sizeof($comments) > 0) {
        $ratingAverage = $ratingSum / sizeof($comments);
      } else {
        $ratingAverage = 0;
      }
      return round($ratingAverage, 2);
    }
}
