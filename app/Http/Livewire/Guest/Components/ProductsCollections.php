<?php

namespace App\Http\Livewire\Guest\Components;

use App\Models\FoodItems;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class ProductsCollections extends Component
{
    public $limit;
    public $category;
    public $attribute;
    protected $listeners= ['applyFilter' => 'applyFilter'];

    public function render()
    {
        return view('livewire.guest.components.products-collections')
            ->with('items', $this->items() );
    }
    public function items()
    {
        return  DB::table('food_items')
            ->join('food_categories', 'food_items.category_id', '=', 'food_categories.id')
            ->join('s_k_u_s', 'food_items.id', '=', 's_k_u_s.food_item_id')
            ->join('attributes', 's_k_u_s.attribute_id', '=', 'attributes.id')
            ->where('food_items.is_available', 1)
            ->where('attributes.status', 1)
            ->where('s_k_u_s.status', 1)
            ->where('food_categories.status', 1)
            ->when(!empty($this->category), function ($query) {
                return $query->whereIn('food_items.category_id', $this->category);
            })
            ->when($this->attribute, function ($query) {
                return $query->whereIn('s_k_u_s.attribute_id', $this->attribute);
            })
            ->select('food_items.*','s_k_u_s.price',
                'attributes.name as attribute',
                'food_categories.name as category')
            ->paginate(10);
    }

    public function applyFilter($category, $attribute)
    {
        $this->category = $category;
        $this->attribute = $attribute;
    }

    public function ChangeLimit($limit): void
    {
        $this->limit=$limit;
         $this->emit('refresh');
    }
}
