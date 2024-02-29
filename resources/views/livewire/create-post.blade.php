<form wire:submit="save">
    {{-- Live-updating fields --}}
    <input type="text" wire:model.live="form.title">
    <div>
        @error('form.title')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <input type="text" wire:model="form.content">
    <div>
        @error('form.content')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">Save</button>
</form>

@script
    <script>
        $wire.on('post-created', () => {
            // Listne on the event
        });

        //Fire a post-created event...
        $wire.dispatch('post-created');

        //To dispatch the event only to the component where the script resides and not other components on the page (preventing the event from "bubbling" up), you can use dispatchSelf()
        $wire.dispatchSelf('post-created');

        // You might not need events
        // If you are using events to call behavior on a parent from a child, you can instead call the action directly from the child using $parent in your Blade template. For example:

        // <button wire:click="$parent.showCreatePostForm()">Create Post</button>
    </script>
@endscript




{{-- 
    <form wire:submit="save">
    <x-input-text name="title" wire:model="title" /> 
 
    <x-input-text name="content" wire:model="content" /> 
 
    <button type="submit">Save</button>
    </form>

    Next, here's the source for the x-input-text component:

    @props(['name'])
    
    <input type="text" name="{{ $name }}" {{ $attributes }}>
    
    <div>
        @error($name) <span class="error">{{ $message }}</span> @enderror
    </div>
 --}}
