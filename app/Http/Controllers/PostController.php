<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public static function index()
    {
        return Post::all();
    }

    public  function store()
    {
        $posts = new Post;
        $posts->likes = 2000;
        $posts->views = 2000;
        $posts->user_id =1;
        $posts->save();
        return Post::find($posts->id);
    }
}
