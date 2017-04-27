<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

use App\Comment;
use App\User;

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

  public function createComment(Request $request) {
    $id = Auth::id();
    $request->request->add(['user_id' => $id]);
    $comment = Comment::create($request->all());

    return Response::json(['body' => $comment['body'], 'username' => User::where('id', $id)->value('name'), 'rating' => $comment['rating']]);
  }
}
