<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\Attributes\Title;

class BookList extends Component
{
    public $text = '';
    public function delete(Book $book){
        $book->delete();
    }
    #[Title('Book List')]
    public function render()
    {
        if($this->text){
            return view('livewire.book-list', [
                'books' => Book::where('title', 'LIKE', "%{$this->text}%")->get()
        ]);
        }
        return view('livewire.book-list', ['books' => Book::all()]);
    }
}
