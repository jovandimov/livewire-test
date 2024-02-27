<div>
    <h1>{{ $count }}</h1>

    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
    
    <br/>
    <livewire:create-post title="test pass data"/>
</div>