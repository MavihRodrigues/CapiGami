<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    public $alunoId2;
    public $nome;
    public $email;
    public $password;

    public function mount(){
        
        if($aluno = Aluno::find(Auth::user()->id)){
            $this->alunoId2 = $aluno->id;
            $this->nome = $aluno->nome;
            $this->email = $aluno->email;
             $this->password = $aluno->senha;
        }    
        //fazer uma verificação: verificar se o usuário existe
        
    }

    public function salvar()
    {
        $aluno = Aluno::find($this->alunoId2);

        if ($aluno) {
            $aluno->update([
                'nome' => $this->nome,
                'email' => $this->email,
                'password' => $this->password
            ]);

            $aluno->save();
            session()->flash('success', 'Dados Atualizados');
        }
    }


    
    public function render()
    {
        return view('livewire.aluno.edit');
    }
    
}
