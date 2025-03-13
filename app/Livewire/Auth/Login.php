<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    protected $messages = [
        'email.required' => 'Email é obrigatório',
        'email.email' => 'Formato de email inválido',
        'password.required' => 'Senha obrigatória',
        'password.min' => 'A senha precisa ter mais de 6 caracteres',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            if (Auth::user()->role === 'admin') {

                return redirect()->route('admin.dashboard');  //: = se não   
            }

            if (Auth::user()->role === 'teacher') {

                return redirect()->route('teacher.dashboard');  //: = se não   
            }

            if (Auth::user()->role === 'aluno') {

                return redirect()->route('aluno.dashboard');  //: = se não   
            }
        }
        session()->flash('error', 'Email ou senha incorretos');
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
