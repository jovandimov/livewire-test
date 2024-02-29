<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Interfaces\PostRepositoryInterface;
use Illuminate\Support\Facades\App;

class ShowPosts extends Component
{
    public $posts;
    private PostRepositoryInterface $postRepository;

    public function boot(PostRepositoryInterface $postRepository)
    {
        // This is not correct way to add DI, because boot is called on every render of the page :)) ...
        $this->postRepository = $postRepository;
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
