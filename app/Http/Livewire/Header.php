<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Header extends Component {

    public bool $showDropdown;
    public $results, $query;

    protected $listeners = [
        'setQuery' => 'setQuery'
    ];

    public function mount() {
        $this->showDropdown = false;
        $this->query = '';
    }

    public function render() {
        $this->results = Product::where('name', 'LIKE', '%' . $this->query . '%')->get();
        return view('livewire.header');
    }

    public function setQuery($query) {
        $this->query = $query;
    }
}
