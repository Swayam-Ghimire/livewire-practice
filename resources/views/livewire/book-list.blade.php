<div>
    <livewire:page-header subtitle="Here is your book list">

    <input type="text" wire:model.live.debounce.700ms='text' class="search" placeholder="Search for books">

    <ul class="list">
        @foreach($books as $book)
            <li wire:key="{{ $book->id }}">
                <button wire:click="delete({{ $book->id }})">
                    Delete
                </button>
                <h3>{{ $book->title }}</h3>
                <h4>{{  $book->author }}</h4>
                <p>Rating: {{ $book->rating }}/10</p>
            </li>
        @endforeach
    </ul>
</div>
