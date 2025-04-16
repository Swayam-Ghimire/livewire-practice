<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\Attributes\Title;

class BookList extends Component
{


    public function delete(Book $book){
        $book->delete();
    }
    #[Title('Book List')]
    public function render()
    {
        return view('livewire.book-list', ['books' => Book::all()]);
    }
}
