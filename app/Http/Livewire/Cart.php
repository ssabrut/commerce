<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component {

    public $name, $price, $quantity, $merchant;

    public function mount($name, $price, $quantity, $merchant) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->merchant = $merchant;
    }

    public function render() {
        return view('livewire.cart');
    }
}
