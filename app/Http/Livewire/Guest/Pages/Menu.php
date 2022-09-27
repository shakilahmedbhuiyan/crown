<?php

namespace App\Http\Livewire\Guest\Pages;

use App\Models\FoodCategory;
use Illuminate\Support\Str;
use Livewire\Component;

class Menu extends Component
{
    public array $header = array();
    public $items=[];

    public function mount()
    {
        $this->header =
            [
                'title' => 'Menu',
                'breadcrumbs' => ['home', 'menu'],
                'description'=> 'All food item of crown restaurant are available here'
            ];
    }

    public function render()
    {
        return view('livewire.guest.pages.menu')
            ->layout('layouts.guest', ['title' => $this->header['title'],
                'description' => $this->header['description']]);
    }

}
