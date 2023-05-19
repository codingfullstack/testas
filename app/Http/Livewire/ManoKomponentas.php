<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ManoKomponentas extends Component
{
    public $message = 'Sveiki, Livewire!';

    public function render()
    {
        return view('livewire.mano-komponentas');
    }
}
