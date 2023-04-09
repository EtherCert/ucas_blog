<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::simplePaginate(20);

      return view('admin.posts.index', [
        'posts' => $posts
      ]);
    }
public function create(){
  $categories = Category::all();
  $tags = Tag::all();
  return view('admin.posts.create', [
    'categories' => $categories,
    'tags' => $tags,
  ]);
}
public function store(Request $request){
   $request->validate([
    'title' => 'required|string|max:255',
    'details' => 'required',
    'category_id' => 'required|int|exists:categories,id',
    'post_img' => 'nullable|image',
    'type' => 'in:0,1',
   ]);
   $data = $request->all();
   $data['user_id'] = 12;
   if($request->hasFile('post_img')){
    $file = $request->file('post_img');
        $data['post_img'] =  $file->store('images', 'public');
   }

   $post = Post::create($data);
   $post->tags()->attach($request->tags_id);

   return redirect()->back()->with([
    'message_flash' => 'تم إضافة المنشور بنجاح ..',
    'alter' => 'success'
   ]);

}
public function delete($id){
 $post = Post::findOrFail($id);
 $post->delete();

 return redirect()->back()->with([
  'message_flash' => 'تم حذف المنشور بنجاح ..',
  'alter' => 'success'
 ]);
}

public function edit($id){
  $post = Post::findOrFail($id);
  $categories = Category::all();
  $tags = Tag::all();
  return view('admin.posts.edit', [
    'post' => $post,
    'categories' => $categories,
    'tags' => $tags,
  ]);
}

public function update(Request $request, $id){
  $request->validate([
   'title' => 'required|string|max:255',
   'details' => 'required',
   'category_id' => 'required|int|exists:categories,id',
   'post_img' => 'nullable|image',
   'type' => 'in:0,1',
  ]);
  $data = $request->all();
  $data['user_id'] = 12;
  if($request->hasFile('post_img')){
   $file = $request->file('post_img');
       $data['post_img'] =  $file->store('images', 'public');
  }
$post = Post::findOrFail($id);
  $post->update($data);
  $post->tags()->detach($request->tags_id);

  return redirect()->back()->with([
   'message_flash' => 'تم تعديل المنشور بنجاح ..',
   'alter' => 'success'
  ]);
}
}
