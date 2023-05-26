<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Shoppingcart;
use Livewire\Component;


class Productlist extends Component
{
    public $products;
    // public $toppings;

    public function render()
    {
        $this->products = Product::get();

        return view('livewire.productlist');
    }

    public function addToCart($id) 
    {
       $data = [
       'product_id' => $id,
    ];
    Shoppingcart::updateOrCreate($data);
    $this->emit('updateCartCount');
    session()->flash('success','Product added to the cart successfully');

    }
}
