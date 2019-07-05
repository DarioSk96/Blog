<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(10);
        return view('home', ['posts' =>$posts]);
    }


    public function getPostForm(){
        return view('post/post_form');
    }


    public function createPost(Request $request){
        $post = Post::create(array(
            'title' =>Input::get('title'),
            'description' =>Input::get('description'),
            'author' =>Auth::user()->id
        ));
        return redirect()->route('home')->with('success', 'Post has been created');
    }

    public function getPost($id){
        $post = Post::find($id);
        return view('post/post_detail', ['post' => $post]);
    }

    public function editPost($id){
        $post = Post::find($id);
        return view('post/post_edit', ['post' =>$post]);
    }

    public function updatePost(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('home')->with('success', 'post has been updated successfuly');
    }

    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home')->with('success', 'Post has been deleted successfuly!');
    }

    public function welcome()
    {
        $posts = Post::paginate(10);
        return view('post.index', ['posts' => $posts]);
    }
}
