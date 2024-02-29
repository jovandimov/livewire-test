<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    #On[('post-created')]
    public function updatePostList($title)
    {

    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
