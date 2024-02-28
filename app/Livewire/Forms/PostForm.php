<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $post;

    public $title = '';

    public $content = '';

    public function rules()
    {
        return [
            'title' => [
                'required',
                // Rule::unique('posts')->ignore($this->post),
            ],
            'content' => [
                'required',
            ]
        ];
    }

    public function setPost(Post $post)
    {
        $this->post = $post;

        $this->title = $post->title;

        $this->content = $post->content;
    }

    public function update()
    {
        $this->validate();

        $this->post->update(
            $this->all()
        );
    }
}
