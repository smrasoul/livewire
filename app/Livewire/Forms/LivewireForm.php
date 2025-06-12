<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LivewireForm extends Form
{
    #[Rule('required|max:255|email')]
    public $email;
    #[Rule('required|max:255|min:3')]
    public $subject;
    #[Rule('required|max:255|min:5')]
    public $message;

    public function sendEmail():void
    {
        sleep(3);
    }
}
