<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\FoodCategory;
use Livewire\Component;

class Category extends Component
{
    public array $form=['name'=>"",'description'=>"",'status'=>true];

    /**
     * Get validator rules.
     *
     * @return array
     */
    protected array $rules=[
        'form.name'=> 'string|required|max:50|unique:App\Models\FoodCategory,name',
        'form.description'=> 'string|max:200|nullable',
        'form.status'=> 'boolean|required|'
    ];
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    protected array $validationAttributes = [
            'form.name' => 'Category Name',
            'form.description' => 'Category Description',
            'form.status' => 'Category status',
        ];

    public function render()
    {
        return view('livewire.admin.pages.category')
            ->layout('layouts.dash');
    }


    public function mount(): void
    {
        $this->form['status'] = true;
    }

    /*
     * create a new category
     */
    public function createCategory(): \Illuminate\Http\RedirectResponse
    {
        $validated=$this->validate();
        FoodCategory::create([
            'name'=> $validated['form']['name'],
            'description'=> $validated['form']['description'],
            'status'=> $validated['form']['status'],
        ]);
        $this->reset();
        $this->emitTo('admin.components.food-category-table', 'refreshCategory');
        return back()->with('success', 'Category created successfully');

    }

}
