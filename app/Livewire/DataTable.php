<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{

    use WithPagination;

    #[Url()]
    public $search;
    #[Url()]
    public $admin ='';
    #[Url()]
    public $sortBy = 'created_at';
    #[Url()]
    public $sortDir = 'DESC';
    #[Url()]
    public $perPage = 5;

    //when $search is changed, this function is called
    public function updatedSearch(){
        $this->resetPage();
    }

    public function setSortBy($sortByField){

        if($this->sortBy == $sortByField){
            $this->sortDir = $this->sortDir == 'DESC' ? 'ASC' : 'DESC';
        }else{
            $this->sortBy = $sortByField;
            $this->sortDir = 'DESC';
        }
    }

    public function delete(User $user)
    {
        $user->delete();
    }
    public function render()
    {
        $users = User::search($this->search)
            ->when($this->admin !== '', function ($query) {
                $query->where('is_admin', $this->admin);
            })
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->perPage);
        return view('livewire.data-table', compact('users'));
    }
}
