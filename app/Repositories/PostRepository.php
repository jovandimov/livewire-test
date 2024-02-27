<?php

namespace App\Repositories;

use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }
    public function deletePost(int $id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}
