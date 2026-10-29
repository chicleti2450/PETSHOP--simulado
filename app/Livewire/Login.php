<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function store()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credenciais = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credenciais)) {
            session()->regenerate();

            return redirect()->route('produtos.index');
        }

        $this->addError(
            'email',
            'E-mail ou senha inválidos.'
        );
    }

    public function render()
    {
        return view('livewire.login');
    }
}
