<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public string $childTitle = '';

    public function render()
    {
        return view('livewire.parent-component');
    }
}
