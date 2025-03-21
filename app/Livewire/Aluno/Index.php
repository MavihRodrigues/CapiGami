<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Livewire\Component;

class Index extends Component
{
    public $alunoId;
    public $nome;
    public $email;
    public $rm;
    public $password;
    public $confirmar_senha;

    // 
    protected $listeners = [
        'editarUser',
        'userAtualizado' => 'render'
    ];

    public function render()
    {
        $aluno = Aluno::all();
        return view('livewire.aluno.index', compact('aluno'));
    }

    public function abrirModalVisualizar($alunoId){
        $aluno = Aluno::find($alunoId);

        if($aluno) {
            $this->nome = $aluno->nome;
            $this->email = $aluno->email;
            $this->rm = $aluno->rm;
        }
    }
    public function abrirModalExclusao($alunoId){
        $this->alunoId = $alunoId; 
    }
    
    public function abrirModalEdicao($alunoId){
        $this->dispatch('editarAluno', alunoId: $alunoId);
    }

    public function excluir(){
        if($this->alunoId){
            Aluno::find($this->alunoId)->delete(); 
        }
    }
}
