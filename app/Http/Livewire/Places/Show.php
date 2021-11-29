<?php

namespace App\Http\Livewire\Places;

use Livewire\Component;
use App\Models\Place;

class Show extends Component
{
    public $place;

    public function mount(Place $place)
    {
        $this->place = $place;
    }

    public function render()
    {
        return view('livewire.places.show')->layout('layouts.place');
    }
}