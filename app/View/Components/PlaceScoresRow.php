<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PlaceScoresRow extends Component
{
    public $score;
    public $description;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($score, $description = '', $type = 'score')
    {
        $this->score = $score;
        $this->type = $type;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.place-scores-row');
    }

    public function calculateColor()
    {
        // if ($this->type === 'weather') {
        //     if ($this->score <= 3)
        //         return 'blue-400';
        //     else if ($this->score <= 6)
        //         return 'green-500';
        //     else
        //         return 'red-400';
        //}
        if ($this->type === 'hospital') {
            if ($this->score <= 30)
                return 'green-500';
            else if ($this->score <= 60)
                return 'yellow-400';
            else
                return 'red-400';
        } else {
            if ($this->score <= 3)
                return 'red-400';
            else if ($this->score <= 6)
                return 'yellow-400';
            else
                return 'green-500';
        }
    }

    public function calculateWidth()
    {
        if ($this->type === 'hospital')
            if ($this->score <= 20)
                return 100;
            else if ($this->score <= 40)
                return 75;
            else if ($this->score <= 60)
                return 50;
            else if ($this->score <= 80)
                return 25;
            else
                return 10;
        // else if ($this->type === 'weather')
        //     return 100;
        else
            return $this->score * 10;
    }

    public function buildLabel()
    {
        if ($this->type === 'hospital')
            return $this->score . ' miles';
        else if ($this->type === 'weather')
            return $this->description;
        else if ($this->type === 'cell_coverage') {
            if ($this->score <= 3)
                return 'Weak';
            else if ($this->score <= 6)
                return 'Okay';
            else
                return 'Strong';
        } else if ($this->type === 'dangerous_animal') {
            if ($this->score <= 3)
                return 'Dangerous';
            else if ($this->score <= 7.5)
                return 'Okay';
            else
                return 'Safe';
        } else
            return $this->score . ' / 10';
    }
}