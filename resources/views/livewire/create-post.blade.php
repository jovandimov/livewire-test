<form wire:submit="save">
    {{-- Live-updating fields --}}
    <input type="text" wire:model.live="form.title">
    <div>
        @error('form.title') <span class="error">{{ $message }}</span> @enderror
    </div>
 
    <input type="text" wire:model="form.content">
    <div>
        @error('form.content') <span class="error">{{ $message }}</span> @enderror
    </div>
 
    <button type="submit">Save</button>
</form>




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