<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class CreateProduct extends Component
{
    public $name, $category_id, $amount, $description;

    public $isOpen = false;

    public $categories; 

    protected $listeners = ['openCreateProductModal'=>'open'];

    public function updated($field)
    {
        $this->validateOnly($field, [
            // 'category_id' => 'required',
            'name' => 'required',
            'amount' => 'required|numeric',
        ]);
    }

    public function open()
    {
        $this->isOpen = true;
    }

    public function close()
    {
        $this->isOpen = false;
    }
 
    public function createProduct()
    {
        $validatedData = $this->validate([
            // 'category_id' => 'required|unique:categories',
            'name' => 'required',
            'amount' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $validatedData['id'] = $this->Uuid();
        $validatedData['category_id'] = $this->category_id;
        $validatedData['user_id'] = auth()->user()->id;

        $product = Product::create($validatedData);

        if($product){
            $this->emit("alert", ["success", "Product successfully added"]);
            $this->emit("refreshProducts");

        }else{
            
            $this->emit("alert", ["error", "Unable to add product"]);
        }

        $this->name = "";
        $this->isOpen = false;

    }


    public function render()
    {
        $this->categories = Category::where('user_id',auth()->user()->id)->get();

        return view('livewire.product.create-product');
    }
}
