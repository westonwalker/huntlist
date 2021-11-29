<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Subscriber;

class Subscribe extends Component
{
    public $email;
    public $hasSubmitted = false;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function render()
    {
        return view('livewire.pages.subscribe', ['hasSubmitted' => $this->hasSubmitted]);
    }

    public function submit()
    {
        $this->validate();

        Subscriber::create([
            'email' => $this->email,
        ]);
        $this->hasSubmitted = true;
    }
}