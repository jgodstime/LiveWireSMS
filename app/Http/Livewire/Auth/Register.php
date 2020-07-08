<?php

namespace App\Http\Livewire\Auth;

use App\Models\Role;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{


    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $phone_number;
    public $shop_name;
    public $address;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'first_name' => 'min:2',
            'last_name' => 'min:2',
            'email' => 'email|unique:users',
            'phone_number' => 'numeric',
            'shop_name' => 'required|unique:users',

        ]);
    }

    public function createUser(Request $request){
        // dd($request->data);
        // dd($request->only('email', 'password'));
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|unique:users',
            'phone_number' => 'required',
            'shop_name' => 'required|unique:users',
            'address' => 'required',
        ]);

        $role = Role::where('name','user')->first();

        $validatedData['id'] = Uuid::uuid4()->toString();
        $validatedData['role_id'] = $role->id;
        $validatedData['password'] = Hash::make($validatedData['password']);

        
         User::create($validatedData);

        $credentials = ['email'=>$validatedData['email'],'password' => $this->password];

        if (Auth::attempt($validatedData)) {
            // Authentication passed...
            session()->flash('success', 'Registration successful and you are logged in.');

            return redirect()->intended('dashboard');
        }

        session()->flash('success', 'Registration successful.');
        return redirect()->to('/login');


    }


    public function render()
    {
        return view('livewire.auth.register');
    }

    public function mount()
    {
        if (auth()->user()) {
            redirect('/dashboard');
       }
    }
}
