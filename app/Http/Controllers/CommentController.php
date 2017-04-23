<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Comment;

class CommentController extends Controller
{
  public function getComments($attraction_id) {
    //echo $category;
    $comments = Comment::where('attraction_id', $attraction_id)->get();

    foreach ($comments as &$comment) {
      $user = $comment->user()->value('name');
      $comment['username'] = $user;
    }
    
    return Response::json($comments);
  }
}
