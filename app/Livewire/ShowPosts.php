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

    public function mount(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
        $this->posts = $this->postRepository->all();
    }

    // public function delete(PostRepositoryInterface $posts, $postId)
    // {
    //     $posts->deletePost($postId);
    // }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
