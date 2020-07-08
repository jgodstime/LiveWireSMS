<?php

namespace App\Http\Livewire\Headers;

use Livewire\Component;

class SideBar extends Component
{
    public $user;

    public function render()
    {   
        
        $this->user  = auth()->user();
        return view('livewire.headers.side-bar');
    }
}
