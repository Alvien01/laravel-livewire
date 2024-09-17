<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
#[Title('Users')]
class Show extends Component
{
    public \App\Models\User $user;
    public function render()
    {
        // return view('livewire.users.show')->title('User :', $this->user->name);
        return view('livewire.users.show');

    }
}
