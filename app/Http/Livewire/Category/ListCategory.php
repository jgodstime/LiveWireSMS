<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use UxWeb\SweetAlert\SweetAlert;

class ListCategory extends Component
{
    public $categories;
    protected $listeners = ['refreshCategories'=>'mount'];
    
    public function render()
    {
        
        return view('livewire.category.list-category');
    }

    public function mount(Category $category)
    {

        $this->categories = $category->where('user_id',auth()->user()->id)->get();
    }


    
    
}
