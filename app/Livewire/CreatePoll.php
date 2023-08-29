<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;

    public $count = 0;
 
    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.create-poll');
    }
}
