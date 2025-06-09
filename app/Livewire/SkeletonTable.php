<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SkeletonTable extends Component
{

    use WithPagination;

    public function placeholder(){
        return view('skeleton-loading');
    }
    public function render()
    {

        sleep(3);

        return view('livewire.skeleton-table');
    }
}
