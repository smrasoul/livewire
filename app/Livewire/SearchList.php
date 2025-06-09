<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SearchList extends Component
{

    use WithPagination;

    public $search;

    public function update(){

    }

    public function render()
    {

        $users = User::latest()
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(5);

        return view('livewire.search-list', compact('users'));
    }
}
