<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component {

    public bool $showDropdown;

    public function mount() {
        $this->showDropdown = false;
    }

    public function render() {
        return view('livewire.header');
    }
}
