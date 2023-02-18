<?php

namespace App\Http\Livewire;

use App\Models\Comment as ModelsComment;
use App\Models\Like;
use Livewire\Component;
use App\Models\Publication;
use Livewire\Request;

class Comment extends Component
{
    public $post;
    public $content;
    public function render()
    {
        $publication = Publication::findOrFail($this->post);
        return view('livewire.comment',[
            'publication' => $publication
        ]);
    }

    public function like(int $id){
        $publication = Publication::findOrfail($id);
        
        $publication->update([
         'nblike' => $publication->nblike+1
        ]);
 
        Like::create([
         'user_id' => auth()->user()->id,
         'publication_id' => $publication->id,
         'datelike' => now()
        ]);
     }

     protected $rules = [
        'content' => 'required'
     ];

     public function submit(){
        $this->validate();
        $publication = Publication::findOrFail($this->post);
        $publication->update([
            'nbcomment' => $publication->nbcomment+1
        ]);

        ModelsComment::create([
            'user_id' => auth()->user()->id,
            'publication_id'=> $this->post,
            'dateComment' => now(),
            'content'=>$this->content
        ]);
     }
}
