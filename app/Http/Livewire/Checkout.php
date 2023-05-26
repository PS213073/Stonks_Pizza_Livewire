<?php

namespace App\Http\Livewire;


use App\Models\Shoppingcart;
use Livewire\Component;


class Checkout extends Component
{

    public $cartitems;
    public $total;

    protected $listeners = ['Checkout' => 'render'];

    public function Checkout()
    {
        
        $this->cartitems = Shoppingcart::
        get();
        $this->total = 0; 
        foreach($this->cartitems as $item){
            $this->total += $item->product->price * $item->quantity;
        }  
    }

    public function render()
    {
        $this->Checkout();

        return view('livewire.checkout');
    }
}
