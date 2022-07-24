<?php

namespace App\Http\Livewire\Admin\Pages\Items;

use Livewire\Component;

class Index extends Component
{

    public $listeners = [
        'itemCreated' => 'itemCreated',
    ];
    public function itemCreated(): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('admin.item.index')->with('success', 'Item created successfully');
    }

    public function render()
    {
        return view('livewire.admin.pages.items.index')
            ->layout('layouts.dash');
    }


}
