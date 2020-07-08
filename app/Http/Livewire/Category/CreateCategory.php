<?php

namespace App\Http\Livewire\Category;

use Ramsey\Uuid\Uuid;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
// use UxWeb\SweetAlert\SweetAlert;
// use Illuminate\Support\Facades\Session;

class CreateCategory extends Component
{
    public $name;

    public $isOpen = false;

    protected $listeners = ['openCreateCategoryModal'=>'open'];

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|unique:categories',
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
 

    public function createCategory()
    {
        $validatedData = $this->validate([
            'name' => 'required|unique:categories',
        ]);

        $validatedData['id'] = $this->Uuid();
        $validatedData['user_id'] = auth()->user()->id;

        $category = Category::create($validatedData);

        if($category){
            $this->emit("alert", ["success", "Category successfully added"]);
            $this->emit("refreshCategories");

        }else{
            
            $this->emit("alert", ["error", "Unable to add category"]);
        }

        $this->name = "";
        $this->isOpen = false;

    }


       
    public function render()
    {
        return view('livewire.category.create-category');
    }

    
}
