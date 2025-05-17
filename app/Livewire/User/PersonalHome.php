<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class PersonalHome extends Component
{
    public $user;
    
    public function render()
    {
        return view('livewire.user.personal-home');
    }
}
