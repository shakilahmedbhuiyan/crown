<?php

namespace App\Http\Livewire\Guest\Pages;

use Livewire\Component;

class Menu extends Component
{
    public array $header = array();

    public function mount()
    {
        $this->header =
            [
                'title' => 'Menu',
                'breadcrumbs' => ['home', 'menu']
            ];
    }

    public function render()
    {
        return view('livewire.guest.pages.menu')
            ->layout('layouts.guest', ['title' => $this->header['title']]);
    }


}
