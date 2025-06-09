<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class RegisterForm extends Component
{
    //this is a must.
    //livewire:publish --config --pagination
    use WithPagination, WithFileUploads;

    #[Rule('required|min:2|max:50')]
    public $name = '';
    #[Rule('required|email|unique:users,email')]
    public $email = '';
    #[Rule('required|min:4')]
    public $password = '';

    #[Rule('nullable|sometimes|image|max:1024')]
    public $image = null;

    public function create()
    {

        sleep(2);

        $validated = $this->validate();

        if ($this->image) {
            $validated['image'] = $this->image->store('uploads', 'public');
        }

        $user = User::create($validated);

        $this->reset(['name', 'email', 'password', 'image']);

        session()->flash('success', 'User created successfully');

        $this->dispatch('user-created', $user);
    }

    public function updateList(){
        $this->dispatch('update-list');
    }
    public function render()
    {

        return view('livewire.register-form');
    }
}
