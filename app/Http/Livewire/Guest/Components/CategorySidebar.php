<?php

namespace App\Http\Livewire\Guest\Components;

use App\Models\Attribute;
use App\Models\FoodCategory;
use Livewire\Component;

class CategorySidebar extends Component
{
    public $categories, $attributes;
    public $category = [], $attribute = [];
    protected $listeners = ['filter' => 'applyFilter'];

    public function render()
    {
        return view('livewire.guest.components.category-sidebar');
    }

    public function mount()
    {
        $this->categories = FoodCategory::getActiveCategory()->toArray();
        $this->attributes = Attribute::getActiveAttributes()->toArray();
    }

    public function applyFilter(): void
    {
        $this->emit('applyFilter', $this->category, $this->attribute);
    }

    public function resetCategories(): void
    {
        $this->category = null;
        $this->emit('applyFilter', $this->category, $this->attribute);
    }

    public function resetAttributes(): void
    {
        $this->attribute = null;
        $this->emit('applyFilter', $this->category, $this->attribute);
    }

    public function resetFilter()
    {
        $this->category = null;
        $this->attribute = null;
        $this->emit('applyFilter', $this->category, $this->attribute);
    }
}
