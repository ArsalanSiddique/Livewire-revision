<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Shop extends Component
{

    protected $listeners = ["check"];

    public function check()
    {
        dd("calling parent from child.");
    }

    public function addToCart()
    {
        $this->emit('updateCart');
    }

    public function render()
    {
        return view('livewire.shop')->layout('layouts.dashboard');
    }
}
