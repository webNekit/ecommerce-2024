<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Контакты')]
class PageContacts extends Component
{
    public function render()
    {
        return view('livewire.page-contacts');
    }
}
