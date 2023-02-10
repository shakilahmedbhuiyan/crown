<?php

namespace App\Http\Livewire\Guest\Pages;

use Livewire\Component;

class Contact extends Component
{
    public $header= array();
    public $form;

    public function mount()
    {
        $this->header =
            [
                'title' => 'Contact',
                'breadcrumbs' => ['home', 'contact']
            ];

    }
    public function render()
    {
        return view('livewire.guest.pages.contact')
            ->layout('layouts.guest', ['title' => $this->header['title']]);
    }
}
