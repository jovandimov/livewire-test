<div>
    <form wire:submit="update">
        <input type="number" wire:model="form.id">
        <input type="text" wire:model="form.title">
        <input type="text" wire:model="form.content">

        <button type="submit">Update</button>
        <span wire:loading>Updating...</span>
    </form>
</div>
