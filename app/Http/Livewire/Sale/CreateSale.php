<?php

namespace App\Http\Livewire\Sale;

use App\Models\Product;
use Livewire\Component;

class CreateSale extends Component
{
    public $products;
    

    public function render()
    {
        return view('livewire.sale.create-sale');
    }

      
    public function mount(Product $product)
    {

        $this->products = $product->where('user_id',auth()->user()->id)->get();

    }
}
