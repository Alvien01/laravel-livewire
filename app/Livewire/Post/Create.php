<?php

namespace App\Livewire\Post;

use Livewire\Component;

class Create extends Component
{
    #[\Livewire\Attributes\Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $title = '';
    #[\Livewire\Attributes\Rule(['required'])]

    public string $body = '';
    public \App\Livewire\Forms\PostForm $form;

    public function save()
    {
        // Validasi data
        $validated = $this->validate();

        // Ambil user dan simpan post
        $user = \App\Models\User::find(1);

        // Gunakan data yang sudah divalidasi untuk membuat post
        $user->post()->create($validated);

        // Reset form setelah berhasil menyimpan
        $this->reset();
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
