<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $counter = 0;
    public $number = 10;

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public function incrementByNum($number)
    {
        $this->counter+=$number;
    }

    public function decrementByNum($number)
    {
        $this->counter-=$number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
