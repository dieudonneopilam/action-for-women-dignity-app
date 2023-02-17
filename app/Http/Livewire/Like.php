<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Like extends Component
{
    private $id = 0;
    public function getId(int $id){
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.like');
    }
}
