<?php

namespace App\Http\Livewire\Guest\Components;

use Livewire\Component;

class PageHeading extends Component
{
    public string $title;
    public array $breadcrumbs;

    public function mount($header)
    {
        $this->title = $header['title'];
        $this->breadcrumbs = $header['breadcrumbs'];
    }

    public function render()
    {
        return view('livewire.guest.components.page-heading');
    }
}
