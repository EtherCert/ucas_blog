<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
   public function home(){
    $posts = Post::where('type', '1')->latest()->take(3)->get();

     return view('website.home')->with([
        'posts' => $posts
     ]);
   }
}
