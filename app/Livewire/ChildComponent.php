<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class ChildComponent extends Component
{
    #[Modelable]
    public string $title = '';

    public function render()
    {
        return view('livewire.child-component');
    }

    public function add()
    {
        $this->title .= fake()->word() . ' ';
    }
}
