<div>
    <form wire:submit="save">
        <label for="title">Title:</label>
        <input type="text" id="title" wire:model="title">
        <br />
        <label for="content">Content:</label>
        <input type="text" id="content" wire:model="content">
        <button wire:confirm="Are you sure you want to save?" type="submit">Save</button>
    </form>
</div>
