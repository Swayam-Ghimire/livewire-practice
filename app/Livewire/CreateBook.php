<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class CreateBook extends Component
{
    public $title;
    public $author;
    public $rating;

    public function save(){
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
