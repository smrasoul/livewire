<?php

namespace App\Livewire;

use App\Livewire\Forms\LivewireForm;
use Livewire\Component;

class FormObject extends Component
{

    public LivewireForm $form;

    public function create(){

        $this->form->validate();

        //pretending to send email
        $this->form->sendEmail();

        session()->flash('success', 'We will contact you soon!');

        $this->form->reset('subject', 'message');

    }

    public function render()
    {
        return view('livewire.form-object');
    }
}
