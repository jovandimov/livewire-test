<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowPost extends Component
{
    public $post;

    #[On('post-update.{post.id}')]
    public function refreshPost()
    {
        
    }

    public function mount(Post $post)
    {
        $this->post = Post::findOrFail($post->id);
    }

    public function render()
    {
        return view('livewire.show-post');
    }
}
