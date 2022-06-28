<?php

namespace App\Http\Livewire\Guest\Components;

use App\Models\FoodCategory;
use Livewire\Component;

class CategorySidebar extends Component
{
    public $category;
    public function render()
    {
        return view('livewire.guest.components.category-sidebar');
    }

    public function mount()
    {
        $this->category = FoodCategory::getActiveCategory()->toArray();
    }
}
