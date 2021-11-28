<?php

namespace App\Http\Livewire\Places;

use Livewire\Component;
use App\Models\Place;
use App\Models\PlaceFilter;

class PreviewGrid extends Component
{
    public $places;
    public $filters;
    public $appliedFilters = [];

    public function mount()
    {
        $this->places = Place::all();
        $this->filters = PlaceFilter::all()->toArray();
        foreach ($this->places as $place) {
            $this->filters[] = [
                'id' => $place->id,
                'name' => $place->name,
                'type' => 'place',
                'slug' => $place->slug,
                'emoji' => '',
            ];
        }
    }

    public function render()
    {
        return view('livewire.places.preview-grid');
    }

    // default dont show
    // if click in search box
    // show filters
    // if typed in search box
    // show filters and places (top 10)
}