<?php

namespace App\Http\Livewire\Guest\Components;

use Livewire\Component;

class ProductCard1 extends Component
{
    public $title, $description, $price, $meal, $image, $category;

    public function mount( $product)
    {
        $this->title = $product->title;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->meal = $product->meal;
        $this->image = $product->image;
        $this->category = $product->category;
    }

    public function render()
    {
        return view('livewire.guest.components.product-card1');
    }
}
