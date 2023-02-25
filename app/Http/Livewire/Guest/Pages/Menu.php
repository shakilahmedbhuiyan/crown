<?php

namespace App\Http\Livewire\Guest\Pages;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Menu extends Component
{
    public array $header = array();

    public $perPage = 12;
    public $currentPage = 1;
    public $query;
    public $category;
    protected $listeners = ['applyFilter' => 'updated'];
    public $items, $data, $name;

    public $previousPageUrl, $nextPageUrl;

    public $life_cycle_info = [
        'hook' => "",
        'message' => "",
    ];


    public function mount()
    {
        if (request()->page)
            $this->currentPage= request()->page;
        $this->header =
            [
                'title' => $this->name? 'Menu | '.$this->name : 'Menu',
                'breadcrumbs' => ['home', 'menu'],
                'description' => 'All the food items available at crown restaurant'
            ];
        $this->query = "/product?per_page=".$this->perPage."&order_by=product_name&category_id=" . $this->category."&page=".$this->currentPage;

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

//    public function hydrate()
//    {
////        $this->loadProduct();
//        $this->life_cycle_info['hook'] = "hydrate";
//        $this->life_cycle_info['message'] = "Application is hydrating...";
//        $this->mount();
//    }


//    public function changeLimit()
//    {
//        $this->perPage++;
//        $this->emit('refresh');
//    }

    public function render()
    {
//        if (request()->page)
//            dd($this->currentPage);
        return view('livewire.guest.pages.menu')
            ->layout('layouts.guest', ['title' => $this->header['title'],
                'description' => $this->header['description']]);
    }

}
