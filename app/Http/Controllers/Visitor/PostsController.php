<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostAction;
use DB;

class PostsController extends Controller
{
    public function index(){
    $posts =  Post::where('type', '1')->paginate(5);

    return view('website.posts.index')->with([
        'posts' => $posts
    ]);
}
public function show($id){
    $post =  Post::findOrFail($id);
    $post_action =  PostAction::where('post_id', $id)->first();
    if($post_action){
        $post_action->increment('views');
    }else {
        PostAction::create([
            'post_id' => $id,
            'views' => 1
        ]);
    }

    return view('website.posts.show')->with([
        'post' => $post
    ]);
}

}
