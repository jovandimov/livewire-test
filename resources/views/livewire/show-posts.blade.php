<div>
    @foreach ($posts as $post)
        <div wire:key="{{ $post->id }}">
            <h1>{{ $post->title }}</h1>
            <span>{{ $post->content }}</span>

            <button wire:click="delete({{ $post->id }})">Delete</button>
    @endforeach
</div>
