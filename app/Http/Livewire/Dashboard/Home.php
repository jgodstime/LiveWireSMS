<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Home extends Component
{
    public $user;
    use AuthorizesRequests;

    public function render()
    {
       
        
        $this->user = auth()->user();
        return view('livewire.dashboard.home');
    }


  
}
