<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Shoppingcart as Cart;

class Shoppingcart extends Component
{ 
     public $cartitems, $total = 0;

    public function render()
    {
        $this->cartitems = Cart::with('product')
            ->get();
        
            $this->total = 0; 
            foreach($this->cartitems as $item){
                $this->total += $item->product->price * $item->quantity;
            }  
        
            $this->emit('Checkout');
            return view('livewire.shoppingcart');
    }

    public function incrementQty($id)
    {
        $cart = Cart::whereId($id)->first();
        $cart->quantity += 1;
        $cart->save();

        session()->flash('success','Product quantity updated !!!');
    }

    public function decrementQty($id)
    {
        $cart = Cart::whereId($id)->first();
        if($cart->quantity > 1){
            $cart->quantity -= 1;
            $cart->save();
            session()->flash('success','Product quantity updated !!!');
        }
        else
        {
            session()->flash('info','you cannot have less than 1 quantity');
        }

    }

    public function removeItem($id)
    {
        $cart = Cart::whereId($id)->first();

        if($cart){
            $cart->delete();
            $this->emit('updateCartCount');
        }
        session()->flash('success','Product removed from cart !!!');
    }
}
