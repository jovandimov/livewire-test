<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = Post::findOrFail($post->id);
    }
    public function delete($id)
    {
        $post = Post::findOrFail($id);

        $this->authorize("delete", $post);

        $post->delete();
    }

    public function render()
    {
        return view('livewire.show-post');
    }
}
