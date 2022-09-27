<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\FoodItems;
use App\Models\SKU;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $items, $available, $order, $users,$product;
    public function render()
    {
        return view('livewire.admin.pages.index')
            ->layout('layouts.dash');
    }

public function mount()
    {
        $this->product = SKU::where('status', 1)->count();
        $this->users=User::all();
        $this->items= FoodItems::with('sku')->where('is_available', 1)->count();
    }
}
