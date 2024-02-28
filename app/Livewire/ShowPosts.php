<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Interfaces\PostRepositoryInterface;

class ShowPosts extends Component
{
    public $posts;
    private PostRepositoryInterface $postRepository;

    public function boot(PostRepositoryInterface $postRepository)
    {
        //CORRECT WAY TO IMPLEMENT "DI" IN LIVEWIRE
        $this->postRepository = $postRepository;
    }

    public function mount()
    {
        $this->posts = $this->postRepository->all();
    }

    public function delete($postId)
    {
        // Always authorize server-side

        
        // $post = Post::findOrFail($postId);
        // $this->authorize("delete",$post);
        $this->postRepository->deletePost($postId);
        $this->posts = $this->postRepository->all();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
