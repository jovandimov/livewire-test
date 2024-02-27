<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TodoList extends Component
{
    // Livewire supports the following primitive property types: Array, String, Integer, Float, Boolean, and Null.

    
    // Supported PHP types:
    // Type	Full Class Name
    // Collection	Illuminate\Support\Collection
    // Eloquent Collection	Illuminate\Database\Eloquent\Collection
    // Model	Illuminate\Database\Model
    // DateTime	DateTime
    // Carbon	Carbon\Carbon
    // Stringable	Illuminate\Support\Stringable


    // Eloquent Collections and Models
    // When storing Eloquent Collections and Models in Livewire properties, additional query constraints like select(...) will not be re-applied on subsequent requests.
    // See Eloquent constraints aren't preserved between requests for more details

    public $todos = [];

    public $todo = '';

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->reset('todo');

        // reset() won't work on values set in mount()
        // reset() will reset a property to its state before the mount() method was called. 
        // If you initialized the property in mount() to a different value, you will need to reset the property manually.
    }
    public function render()
    {
        return view('livewire.todo-list');
    }
}
