<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Hooks extends Component
{

    public $name;
    public $counter = 0;
    public $message;

    public $infos = [];

    public function boot()
    {
        $this->infos[] = "boot called...";
    }

    public function mount()
    {
        $this->infos[] = "mount called";
    }

    public function booted()
    {
        $this->infos[] = "booted called";
    }

    public function hydrateName($value)
    {
        $this->infos[] = "name hydrate called...";
    }

    public function dehydrateName($value)
    {
        $this->infos[] = "dehydrate name called";
    }

    public function hydrate()
    {

        ++$this->counter;
        $this->infos[] = "hydrate called...";
    }

    public function dehydrate()
    {
        $this->infos[] = "dehydrate called...";
    }

    public function updating($name, $message)
    {
        $this->infos[] = "name and message updating...";
    }

    public function updated($name, $message)
    {
        $this->infos[] = "name and message updated...";
    }

    public function updatingName($value)
    {
        $this->infos[] = "name updating...";
    }

    public function updatedName($value)
    {
        $this->infos[] = "name updated...";
    }

    public function updateName($value)
    {
        $this->name = $value;
    }

    public function render()
    {
        return view('livewire.hooks');
    }
}
