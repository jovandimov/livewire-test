<?php

namespace App\Livewire;

use Livewire\Component;

class ShowTodos extends Component
{
    #[Computed]
    public function todos()
    {
        return Auth::user()
            ->todos()
            ->select(['title', 'content'])
            ->get();
    }

    public function render()
    {
        return view('livewire.show-todos');
    }
}
