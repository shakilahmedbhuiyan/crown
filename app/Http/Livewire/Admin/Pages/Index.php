<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.index')
            ->layout('layouts.dash');
    }
}
