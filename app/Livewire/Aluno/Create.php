<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $email;
    public $rm;
    public $password;

    public function render()
    {
        return view('livewire.aluno.create');
    }

    public function store(){
      $user = User::create([
            'name' => $this->nome, 
            'email' => $this->email, 
            'password' => Hash::make($this->password),
            'role' => 'aluno'
        ]); 

        Aluno::create([
            'rm'=>$this->rm,
            'user_id' => $user->id
        ]);

        session()->flash('success', 'Cadastro Realizado, espere aprovação para entrar');
    }

}
