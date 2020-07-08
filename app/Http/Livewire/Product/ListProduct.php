<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class ListProduct extends Component
{
    public $products;
    public $categories;
    protected $listeners = ['refreshProducts'=>'mount'];
    

    public function render()
    {
        $this->categories = Category::where('user_id',auth()->user()->id)->get();

        return view('livewire.product.list-product');
    }

    
    public function mount(Product $product, Category $category)
    {

        $this->products = $product->where('user_id',auth()->user()->id)->get();

    }

}
