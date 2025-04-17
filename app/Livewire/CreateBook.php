<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\Attributes\Rule;

class CreateBook extends Component
{
    #[Rule('string|min:3|max:255|required')]
    public $title;

    #[Rule('string|required|max:20')]
    public $author;

    #[Rule('integer|required|min:1|max:10')]
    public $rating;

    #[Title('Add a book')]

    public function save(){

        $this->validate();
        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating,
        ]);

        redirect('/');

    }
    public function render()
    {
        return view('livewire.create-book');
    }
}
