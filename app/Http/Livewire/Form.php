<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{

    public $name;
    public $gender;
    public $country;
    public $details;
    public $hobbies = [];

    public $num1;
    public $num2;
    public $sum;

    public function sum()
    {
        $this->sum = $this->num1 + $this->num2;
    }

    public function getsum()
    {
        $this->sum = 30;
    }
    public function render()
    {
        return view('livewire.form');
    }
}
