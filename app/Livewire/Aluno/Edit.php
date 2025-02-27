<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Livewire\Component;

class Edit extends Component
{

    public $alunoId;
    public $nome;
    public $email;
    public $rm;

    protected $listeners =
    [
        'editarAluno',
        'closeEditModal' => 'fecharModal'
    ];

    public function fecharModal(){
        $this->dispatch('hideModal');
    }
    public function render()
    {
        return view('livewire.aluno.edit');
    }
    
    public function editarAluno($alunoId)
    {
        $aluno = Aluno::find($alunoId);

        if ($aluno) {
            $this->alunoId = $aluno->id;
            $this->nome = $aluno->nome;
            $this->email = $aluno->email;
            $this->rm = $aluno->rm;

            $this->dispatch('openEditModal');
        }
    }

    public function salvar()
    {
        $aluno = Aluno::find($this->alunoId);

        if ($aluno) {
            $aluno->update([
                'nome' => $this->nome,
                'email' => $this->email,
                'rm' => $this->rm
            ]);

            $this->dispatch('AlunoAtualizado');
            $this->dispatch('fecharModalEdicao');
            session()->flash('message', 'Aluno Atualizado');
        }
    }

    
}
