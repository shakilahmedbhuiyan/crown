<?php

namespace App\Http\Livewire\Guest\Components;

use Http;
use Livewire\Component;


class ProductsCollections extends Component
{

    public $limit = 12;
    public $perPage = 12;
    public $currentPage = 1;
    public $query;
    public $category, $item;
    protected $listeners = ['applyFilter' => 'updated'];
    public $items, $data, $name;

    public $previousPageUrl, $nextPageUrl;

    public $life_cycle_info = [
        'hook' => "",
        'message' => "",
    ];

    public function mount()
    {
        $this->header =
            [
                'title' => $this->name? 'Menu | '.$this->name : 'Menu',
                'breadcrumbs' => ['home', 'menu'],
                'description' => 'All food item of crown restaurant are available here'
            ];
        $this->query = "/product?per_page=".$this->perPage."&order_by=product_name&category_id=" . $this->category;

        $this->loadProduct();
//       dd($this->data);

    }

    private function loadProduct()
    {
        $result = Http::withHeaders(['Authorization' => 'Bearer ' . session('access_token')])
            ->get(config('pos-api.HOST') . $this->query);
        $this->items = json_decode($result, true);
        $this->data = $this->items['data'];
    }

    public function hydrate()
    {
        $this->loadProduct();
        $this->life_cycle_info['hook'] = "hydrate";
        $this->life_cycle_info['message'] = "Application is hydrating...";
//        $this->render();
    }


    public function render()
    {

        return view('livewire.guest.components.products-collections')
//            ->with('items', $this->items)
            ->with('page', $this->currentPage)
            ->layout('layouts.guest');
    }

    public function updated($category): void
    {
        $this->category = collect($category)->implode(',');
//
        $this->query = "/product?per_page=-1&order_by=product_name&category_id=" . collect($category)->implode(',');
//        $this->emit('refresh');
//        $this->mount();
//       dd($this->query);

    }

    public function filterCategory($category): void
    {
        $this->category = collect($category)->implode(',');
    }

    public function ChangeLimit()
    {
        dd($this->perPage);
        $this->perPage *= 2;

//        $this->emit('refresh');
    }
}
