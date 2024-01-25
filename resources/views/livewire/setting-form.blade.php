<div>
    <form wire:submit="save">
        
        <input type="text" wire:model="name" />
        
        <livewire:file-upload wire:model="file" />

        <button type="submit">Save</button>
    
    </form>
</div>
