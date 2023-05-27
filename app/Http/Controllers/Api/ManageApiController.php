<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;

class ManageApiController extends Controller
{
    public function getTags(){
        $tags = Tag::paginate(5);
        return $tags;
    }
    public function getTag($id){
        $tag = Tag::findOrFail($id);
        return $tag;
    }
    public function deleteTag(Tag $tag){
        $tag->delete();
        return response()->json([
            'message' => 'تم حذف الوسم بنجاح',
            'state' => '200',
        ]);
       }
    public function storeTag(Request $request){
        $request->validate([
            'name' => 'string|required|max:100|min:2'
        ]);
        $tag = Tag::create([
            'name' => $request->name,
            'user_id' => 2
        ]);
    return $tag;
    }
    public function updateTag(Request $request, $id){
        $tag = Tag::findOrFail($id);

        $request->validate([
            'name' => 'string|required|max:100|min:2'
        ]);
        $tag->update([
            'name' => $request->name,
            'user_id' => 2
        ]);
    return $tag;
    }
    public function getPosts(){
        $posts = Post::paginate(30)->load(['category', 'user']);
        return $posts;
    }
}
