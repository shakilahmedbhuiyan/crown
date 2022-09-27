<?php

namespace App\Http\Livewire\Guest\Components;

use App\Models\FoodItems;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;


class ProductsCollections extends Component
{
    public $limit;
    public $category;
    public $attribute;
    public $item;
    protected $listeners = ['applyFilter' => 'applyFilter'];

    public function render()
    {
        return view('livewire.guest.components.products-collections')
            ->with('items', $this->items());
    }

    public function items()
    {
//        return  DB::table('food_items')
//            ->join('food_categories', 'food_items.category_id', '=', 'food_categories.id')
//            ->join('s_k_u_s', 'food_items.id', '=', 's_k_u_s.food_item_id')
//            ->join('attributes', 's_k_u_s.attribute_id', '=', 'attributes.id')
//            ->where('food_items.is_available', 1)
//            ->where('attributes.status', 1)
//            ->where('s_k_u_s.status', 1)
//            ->where('food_categories.status', 1)
//            ->when(!empty($this->category), function ($query) {
//                return $query->whereIn('food_items.category_id', $this->category);
//            })
//            ->when($this->attribute, function ($query) {
//                return $query->whereIn('s_k_u_s.attribute_id', $this->attribute);
//            })
//            ->select('food_items.*','s_k_u_s.price',
//                'attributes.name as attribute',
//                'food_categories.name as category')
//            ->paginate(12);
        return FoodItems::with('category.note', 'sku.attribute')
            ->where('is_available', 1)
            ->when(!empty($this->category), function ($query) {
                return $query->whereIn('category_id', $this->category)
                    ->whereHas('category', function ($query) {
                        $query->where('status', 1);
                    });
            })
            ->when(!empty($this->attribute), function ($query) {
                return $query->whereHas('sku.attribute', function ($query) {
                    $query->whereIn('attribute_id', $this->attribute);
                });
            })->orderBy('food_items.name', 'asc')
            ->paginate(8);

    }

    public function applyFilter($category, $attribute): void
    {
        $this->category = $category;
        $this->attribute = $attribute;
    }

    public function ChangeLimit($limit): void
    {
        $this->limit = $limit;
        $this->emit('refresh');
    }
}
