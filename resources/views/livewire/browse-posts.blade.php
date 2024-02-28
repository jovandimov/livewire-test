<div>
    @foreach ($posts as $post)
        <div wire:key="{{ $post->id }}">
            <h1>{{ $post->id }}</h1>
            <span>{{ $post->content }}</span>

            @if(Auth::user()->isAdmin())
                <button wire:click="deletePost"({{ $post->id }})>Delete</button>
            @endif
        </div>
    @endforeach
</div>
