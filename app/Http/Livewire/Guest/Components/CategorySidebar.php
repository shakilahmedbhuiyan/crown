<?php

namespace App\Http\Livewire\Guest\Components;

use App\Models\Attribute;
use App\Models\FoodCategory;
use Livewire\Component;

class CategorySidebar extends Component
{
    public $categories, $attributes;
    public function render()
    {
        return view('livewire.guest.components.category-sidebar');
    }

    public function mount()
    {
        $this->categories = FoodCategory::getActiveCategory()->toArray();
        $this->attributes = Attribute::getActiveAttributes()->toArray();
    }
}
