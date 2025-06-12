<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class MountBasic extends Component
{

    use WithPagination;

    public $search;

    public function update(){

    }

    //we must pass this argument to the component (<livwire:example :search=""/>)
    public function mount($search): void
    {
        $this->search = $search;
    }

    public function render()
    {

        $users = User::latest()
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(5);

        return view('livewire.search-list', compact('users'));
    }
}
