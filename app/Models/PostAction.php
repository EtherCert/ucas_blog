<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAction extends Model
{
    use HasFactory;
    protected $table = 'post_actions';
    protected $primaryKey = 'id';

    public function post(){
        $this->belongsTo(Post::class, 'post_id', 'id');
    }

}
