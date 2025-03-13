<?php

namespace App\Livewire\Professor;

use App\Models\Professor;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $email;
    public $nif;
    public $password;
    public $confirm_password ;
    public $telefone;

    protected $rules = [
        'nome' => 'required|max:80',
        'email' => 'required|email|unique:admin',
        'nif' => 'required|max:4|min:4',
        'telefone' => 'required|max:15',
        'password' => 'required|min:6',
        'confirm_password' => 'required|min:6',

    ];

    protected $messages = [
        'nome.required'=> 'O campo nome é obrigatório',
        'nome.max'=> 'O limite maxímo de caracteres foi atingido',
        'email.required' => 'Email é obrigatório',
        'email.email' => 'Formato de email inválido',
        'email.unique' => 'Este endereço de email já está cadastrado',
        'nif.required' => 'O campo Nif é obrigatório',
        'nif.min' => 'O limite minímo de caracteres foi atingido',
        'nif.max' => 'O limite maxímo de caracteres foi atingido',
        'telefone.required' => 'O numero de telefone é obrigatório',
        'telefone.max' => 'O máximo de caracteres é 15',
        'password.required' => 'A senha obrigatória',
        'password.min' => 'A senha precisa ter mais de 6 caracteres',
        'confirm_password.required' => 'Esse campo é obrigatório',
        'cconfirm_password.min' => 'O limite minímo de caracteres foi atingido',
    ];

    public function render()
    {
        return view('livewire.professor.create');
    }

    public function store(){

        $this->validate();
        Professor::create([
            'nome'=>$this->nome,
            'email'=>$this->email,
            'nif'=>$this->nif,
            'password'=>$this->password,
            'confirm_password'=>$this->confirm_password,
            'telefone'=>$this->telefone,
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }

}
