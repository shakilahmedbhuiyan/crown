<?php

namespace App\Http\Livewire\Guest\Components;

use Darryldecode\Cart\Cart;
use Livewire\Component;

class CartButton extends Component
{
    public $item;
    public function render()
    {
        return view('livewire.guest.components.cart-button');
    }
    public function addToCart($item)
    {


//        \Cart::add([
//            'id' => $item->id,
//            'name' => $item->name,
//            'price' => $item->price,
//            'quantity' => 1,
//            'attributes' => [
//                'image' => $item->image,
//                'attribute' => $item->attribute->name,
//                'category' => $item->category->name,
//            ],
//            'associatedModel' => $item
//        ]);
    }
}
