<?php

namespace App\Http\Livewire\Guest\Components;

use App\Models\Attribute;
use App\Models\FoodCategory;
use Http;
use Livewire\Component;

class CategorySidebar extends Component
{
    public $categories;
    public $category = [];
    protected $listeners = ['filter' => 'applyFilter'];

    public function render()
    {
        return view('livewire.guest.components.category-sidebar');
    }

    public function mount()
    {
        $this->categories = $this->getProductCategoryFromAPI()['data'];
//        $this->attributes = Attribute::getActiveAttributes()->toArray();
    }

    public function applyFilter()
    {
        redirect(route('menu.category',$this->category));
    }

    public function resetCategories(): void
    {
        $this->category = null;
        $this->emit('applyFilter', $this->category);
    }

    public function resetFilter()
    {
        $this->category = null;
        $this->emit('applyFilter', null);
    }

    private function getProductCategoryFromAPI()
    {
        $request= Http::withHeaders(['Authorization' => 'Bearer '. session('access_token')])
        ->get(config('pos-api.HOST').'/taxonomy?type=product' );
        return json_decode($request, true);
    }

}
