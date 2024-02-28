<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BrowsePosts extends Component
{
    //Always authorize on server side...
    public function deletePost($id)
    {
        if (!Auth::user()->isAdmin)
            abort(403);
        $this->delete($id);
    }

    private function delete(int $id)
    {
        $post = Post::find($id);

        $post->delete();
    }
    public function render()
    {
        return view('livewire.browse-posts', [
            'posts' => Post::all()
        ]);
    }
}
