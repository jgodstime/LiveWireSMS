<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class UpdateCategory extends Component
{
    protected $listeners = ['openUpdateCategoryModal'=>'open'];
    public $name;
    public $categoryId;

    public $isOpen = false;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|unique:categories,name,'.$this->categoryId,
        ]);

    }
    
    public function open($data)
    {
        $data = json_decode($data, true);
        
        $this->name  = $data['name'];
        $this->categoryId  = $data['id'];
        $this->isOpen = true;
    }

    public function close()
    {
        $this->isOpen = false;
    }

   public function updateCategory()
   {
       $category = Category::find($this->categoryId);
       $category->name = $this->name;
       $category->save();

        $this->emit("alert", ["success", "Category successfully updated"]);
        $this->emit("refreshCategories");

        $this->name = "";
        $this->categoryId = "";
        $this->isOpen = false;
   }

    public function render()
    {
        return view('livewire.category.update-category');
    }
}
