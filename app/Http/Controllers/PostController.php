<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getIndex(){
        $posts= DB::table('users')->leftjoin('posts','users.id', '=', 'posts.author')->paginate(2);
        //$posts = Post::orderBy('created_at', 'desc')->take(2)->get();

        $archives = Post::orderBy('id', 'desc')->get();
        return view('post.index', ['posts' => $posts, 'archives' => $archives]);
    }

    public function getFullPost($id){
        $post = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->where('posts.id', '=',$id)->first();
        return view('post.post_read', ['post' => $post]);
    }
}
