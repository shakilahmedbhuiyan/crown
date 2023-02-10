<?php

namespace App\Http\Livewire\Guest\Pages;


use App\Models\FoodItems;
use Illuminate\Support\Str;
use Livewire\Component;

class CategoryProduct extends Component
{
    public array $header = array();
    public $items = [];
    public $category;

    public function mount($category): void
    {
        $this->category = $category;
        $this->header =
            [
                'title' => 'Menu | ' . $category,
                'breadcrumbs' => ['home', 'menu'],
                'description' => 'All food item of crown restaurant are available here'
            ];

    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.guest.pages.category-product')
            ->with('item', $this->itemsCategory())
            ->layout('layouts.guest', ['title' => $this->header['title'],
                'description' => $this->header['description']]);
    }

    public function itemsCategory(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
//        return  DB::table('food_items')
//            ->join('food_categories', 'food_items.category_id', '=', 'food_categories.id')
//            ->join('s_k_u_s', 'food_items.id', '=', 's_k_u_s.food_item_id')
//            ->join('attributes', 's_k_u_s.attribute_id', '=', 'attributes.id')
//            ->where('food_items.is_available', 1)
//            ->where('food_categories.'.Str::slug('name'),'like' ,'%'.$this->category.'%')
//            ->where('attributes.status', 1)
//            ->where('s_k_u_s.status', 1)
//            ->where('food_categories.status', 1)
//            ->select('food_items.*','s_k_u_s.price',
//                'attributes.name as attribute',
//                'food_categories.name as category')->paginate(12);

        return FoodItems::with('category.note', 'sku.attribute')
            ->where('is_available', 1)
            ->whereHas('category', function ($query) {
                $query->where(Str::slug('name'), 'like', '%' . $this->category . '%');
            })->paginate(12);

    }
}
