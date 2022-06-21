<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.category')
            ->layout('layouts.dash');
    }
}
