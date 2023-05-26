<?php

namespace App\Http\Livewire;


use App\Models\Shoppingcart;

use Livewire\Component;

class Cartcounter extends Component
{
    public $total;

    

    protected $listeners = ['updateCartCount' => 'render'];

    
    public function getCartItemCount()
    {
        $this->total = shoppingcart::count();
    }


    public function render()
    {
        $this->getCartItemCount();

        return view('livewire.cartcounter');
    }
}
