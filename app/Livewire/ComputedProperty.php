<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class ComputedProperty extends Component
{

    use WithPagination;

    public $search;
//    public $users;

    public function mount($search): void
    {

        // it is included in the html tho.
        $this->search = $search;

        //this won't support pagination and includes the collection inside html.
//        $this->users = User::latest()->get();
    }


    //it's a computed property like: $users
    //it's passed to the blade file like $this->users
    //it can be used in other methods like test() bellow
    //we won't need the render method now.
    #[Computed()]
    public function users(){
        return User::latest()
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(5);
    }


    public function test(){

        $this->users;

    }

}
