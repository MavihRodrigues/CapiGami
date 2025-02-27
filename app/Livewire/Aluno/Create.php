<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $email;
    public $rm;
    public $senha;
    public $confirmar_senha;

    public function render()
    {
        return view('livewire.aluno.create');
    }

    public function store(){
        Aluno::create([
            'nome'=>$this->nome,
            'email'=>$this->email,
            'rm'=>$this->rm,
            'senha'=>$this->senha,
            'confirmar_senha'=>$this->confirmar_senha,
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }

}
