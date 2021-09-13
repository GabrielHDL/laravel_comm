<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Builder;

class EditProduct extends Component
{

    public $product, $categories, $subcategories, $brands;

    public $category_id;

    public function mount(Product $product) {
        $this->product = $product;

        $this->categories = Category::all();

        $this->category_id = $product->subcategory->category->id;

        $this->subcategories = Subcategory::where('category_id', $this->category_id)->get();

        $this->brands = Brand::whereHas('categories', function(Builder $query) {
            $query->where('category_id', $this->category_id);
        })->get();
    }

    public function getSubcategoryProperty(){
        return Subcategory::find($this->product->subcategory_id);
    }
    
    public function render()
    {
        return view('livewire.admin.edit-product')->layout('layouts.admin');
    }
}
