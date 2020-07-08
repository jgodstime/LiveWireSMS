<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function loginUser()
    {

        $validatedData = $this->validate([
            
            'email' => 'required|exists:users,email',
            'password' => 'required',
    
        ]);

        if (Auth::attempt($validatedData)) {
            // Authentication passed...
            session()->flash('success', 'Login successful and you are logged in.');

            return redirect()->intended('dashboard');
        }

        session()->flash('error', 'Invalid credentials.');
        // return redirect()->to('/login');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function mount()
    {
        if (auth()->user()) {
            redirect('/dashboard');
       }
    }
    
}
