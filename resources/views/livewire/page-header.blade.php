<header class="flex justify-between">
    <div>
        <h2>HI {{ $name }}</h2>
        <p>{{ $subtitle }}</p>
    </div>
    <form wire:submit="$refresh">
        <input type="text" wire:model="name">
        <button>Update</button>
    </form>

</header>