<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Component;

class UpdatePost extends Component
{
    public PostForm $form;
    public function mount(Post $post)
    {
        $this->form->setPost($post);
    }

    public function update()
    {
        $this->form->update();

        return $this->redirect('/posts');
    }
    public function render()
    {
        return view('livewire.update-post');
    }
}
