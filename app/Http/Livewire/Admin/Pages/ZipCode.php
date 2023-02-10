<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class ZipCode extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.zip-code')
            ->layout('layouts.dash');
    }
}
