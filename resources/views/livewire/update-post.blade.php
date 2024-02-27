<div>
    <form wire:submit="update">
        <input type="number" wire:model="id">
        <input type="text" wire:model="title">
        <input type="text" wire:model="content">

        <button type="submit">Update</button>
        <span wire:loading>Updating...</span>
    </form>
</div>
