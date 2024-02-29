<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public PostForm $form;


    public $content;

    public function mount()
    {
        // These properties are not reactive by default
        // The $title property will not update automatically if the outer :title="$initialValue" changes after the initial page load.
        //  This is a common point of confusion when using Livewire, especially for developers who have used JavaScript frameworks like 
        //  Vue or React and assume these "parameters" behave like "reactive props" in those frameworks.
        //   But, don't worry, Livewire allows you to opt-in to making your props reactive.
    }
    public function save()
    {
        $this->validate();

        Post::create(
            $this->form->all()
        );

        $this->form->reset();

        $this->dispatch('post-created', title: $this->form->title);
    }
    #[Layout('layout.app')]
    public function render()
    {
        return view('livewire.create-post');
    }
}
