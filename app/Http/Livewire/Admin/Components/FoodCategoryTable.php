<?php

namespace App\Http\Livewire\Admin\Components;


use App\Models\FoodCategory;
use Mediconesystems\LivewireDatatables\Action;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\LabelColumn;

class FoodCategoryTable extends LivewireDatatable
{

    protected $listeners = ['refreshCategory' => '$refresh'];
    public function builder(): \Illuminate\Database\Eloquent\Builder
    {
        return FoodCategory::query();
    }

    public function columns()
    {
        return [

            Column::name('name')
                ->defaultSort('asc')
                ->searchable()
                ->editable(),
            LabelColumn::name('description')
                ->searchable()
                ->editable(),
            BooleanColumn::name('status')
                ->filterable()
                ->editable()
            ->contentAlignRight(),
        ];
    }


}
