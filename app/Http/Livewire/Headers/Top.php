<?php

namespace App\Http\Livewire\Headers;

use Livewire\Component;

class Top extends Component
{
    public $user;
    
    public function render()
    {
        if (!auth()->user()) {
            redirect('/login');
       }
        $this->user  = auth()->user();

        return view('livewire.headers.top');
    }

    
}
