<?php

namespace App\Livewire\Post;

use Livewire\Component;

class Create extends Component
{
    #[\Livewire\Attributes\Rule(['required'])]
    public string $title = '';
    #[\Livewire\Attributes\Rule(['required'])]
    public string $body = '';

    public function save()
    {
        $user = \App\Models\User::find(1);
        $this->validate();
        $user->post()->create($validated);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.post.create');
    }
}
