<?php

namespace App\Livewire\Forms;

use Livewire\Component;

class PostForm extends Component
{
    public string $title = '';
    public string $body = '';

    protected array $rules = [
        'title' => 'required|string|min:3|max:255',
        'body' => 'required|string',
    ];

    public function store()
    {
        // Validasi data
        $validatedData = $this->validate();

        // Ambil user dan simpan post
        $user = \App\Models\User::find(1);
        $user->post()->create($validatedData);

        // Reset form setelah berhasil menyimpan
        $this->reset();
    }

    public function render()
    {
        return view('livewire.forms.post-form');
    }
}
