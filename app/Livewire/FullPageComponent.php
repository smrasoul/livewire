<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('components.layout')] //defining a layout that has a slot for the blade file.
//#[Title('test')]
class FullPageComponent extends Component
{

    public User $user; //same as mount bellow

//    public function mount(User $user): void
//    {
//        $this->user = $user;
//    }

    // we can actually remove the whole render method.
    public function render()
    {
        return view('livewire.full-page-component')
//            ->layout('components.layout')
            ->title($this->user->name)
            ;
    }
}
