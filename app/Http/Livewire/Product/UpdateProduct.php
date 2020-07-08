<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class UpdateProduct extends Component
{
    public $categories, $productId, $name, $category_id, $amount, $description;
    
    
    public $isOpen = false;
    protected $listeners = ['openUpdateProductModal'=>'open'];


    public function open($data)
    {
        $data = json_decode($data, true);
        
        $this->productId  = $data['id'];
        $this->name  = $data['name'];
        $this->amount  = $data['amount'];
        $this->description  = $data['description'];
        $this->isOpen = true;
    }

    public function close()
    {
        $this->isOpen = false;
    }

    public function updateProduct()
    {
        $product = Product::find($this->productId);
        if(!empty($category_id)){
            $product->category_id = $this->category_id;
        }
       $product->name = $this->name;
       $product->amount = $this->amount;
       $product->description = $this->description;
       $product->save();

        $this->emit("alert", ["success", "Product successfully updated"]);
        $this->emit("refreshProducts");

        $this->name = "";
        $this->amount = "";
        $this->description = "";
        $this->category_id = "";
        $this->isOpen = false;
    }

    public function mount(Category $category)
    {
        $this->categories = $category->where('user_id',auth()->user()->id)->get();

    }

    public function render()
    {
        return view('livewire.product.update-product');
    }
}
