<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
   protected $table = 'posts';
   protected $fillable = ['title', 'details'
        , 'user_id', 'category_id', 'post_img', 'type'];

    // public function getTitleAttribute(){
    //     return ucfirst($this->title);
    // }

    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id')->withDefault([
            'name' => 'default user'
        ]);
    }
    public function category(){
        return $this->belongsTo(Category::class,
                        'category_id',
                            'id')->withDefault([
                                'name' => '-'
                            ]);;
    }

    public function tags(){
        return $this->belongsToMany(
            Tag::class,
            'post_tag',
            'post_id',
            'tag_id',
            'id',
            'id'
        );
    }
    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
    public function postAction(){
        return $this->hasOne(PostAction::class, 'post_id', 'id')->withDefault([
            'id' => 0,
            'likes' => 0,
            'views' => 0
        ]);
    }
}
