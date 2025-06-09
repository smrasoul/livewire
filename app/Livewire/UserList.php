<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{

    use WithPagination;


//    #[On('user-created')] //executes with the passed variable
    public function test($user){
        dd($user);
    }

    #[On('update-list')]
    #[On('user-created')] //re-renders the table component
    public function render()
    {
        $users = User::latest()->paginate(3);

        return view('livewire.user-list', compact('users'));
    }
}
