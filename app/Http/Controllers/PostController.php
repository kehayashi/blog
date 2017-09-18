<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Post;
use App\Http\Requests\LeadRequest;

Class PostController extends Controller {

  public function getPosts(){

    $posts = Post::all();

    return view('/posts')
                ->with('posts', $posts);
  }

  public function getPostId($post_id){

    $post = Post::find($post_id);

    return view('/post')
                ->with('post', $post);
  }
}
