<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{

    protected $listeners = ["updateCart"];
    public $cart_quantity = 0;

    public function updateCart()
    {
        ++$this->cart_quantity;
    }

    public function test()
    {
        $this->emit('check');
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
