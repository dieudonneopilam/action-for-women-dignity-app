<?php

namespace App\Http\Livewire;

use App\Models\Like as ModelsLike;
use App\Models\Publication;
use App\Models\User;
use Livewire\Component;

class Like extends Component
{
    
    public function render()
    {

        $publications = Publication::all();
        return view('livewire.like',[
            'publications' => $publications
        ]);
    }

    public function like(int $id){
       $publication = Publication::findOrfail($id);
       
       $publication->update([
        'nblike' => $publication->nblike+1
       ]);

       ModelsLike::create([
        'user_id' => auth()->user()->id,
        'publication_id' => $publication->id,
        'datelike' => now()
       ]);
    }
}
