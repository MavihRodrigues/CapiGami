<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Index extends Component
{
    
    public function render()
    {
        return view('livewire.admin.index');
        public $alunoId;
        public $nome;
        public $email;
        public $rm;
        public $password;
        public $confirmar_senha;
    
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
                $this->password = $aluno->senha;
                $this->confirmar_senha = $aluno->confirmar_senha;
            
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
