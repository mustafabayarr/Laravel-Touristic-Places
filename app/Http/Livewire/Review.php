<?php

namespace App\Http\Livewire;

use App\Models\Places;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record,$subject,$review,$places_id,$rate;

    public function mount($id){
        $this->record = Places::findOrFail($id);
        $this->places_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    public function resetInput(){
        $this->subject = null;
        $this->review = null;
        $this->rate = null;
        $this->places_id = null;
        $this->IP = null;
    }

    public function store(){
        $this->validate([
           'subject'=>'required|min:5',
            'review'=>'required|min:10'
        ]);
        \App\Models\Review::create([
            'places_id' => $this->places_id,
            'user_id' => Auth::id(),
            'IP' => $_SERVER['REMOTE_ADDR'],
            'subject' => $this->subject,
            'review'=> $this->review
        ]);
        session()->flash('message','Review Send Successfully');
        $this->resetInput();
    }
}
