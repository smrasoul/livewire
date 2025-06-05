<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
    //this is a must.
    //livewire:publish --config --pagination
    use withPagination;

    #[Rule('required|min:2|max:50')]
    public $name = '';
    #[Rule('required|email|unique:users,email')]
    public $email = '';
    #[Rule('required|min:4')]
    public $password = '';

    public function createNewUser()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $this->reset(['name', 'email', 'password']);

        request()->session()->flash('success', 'User created successfully');
    }
    public function render()
    {
        $users = User::paginate(3);

        return view('livewire.clicker', compact('users'));
    }
}
