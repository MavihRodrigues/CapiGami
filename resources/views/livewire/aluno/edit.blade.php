<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true"
    wire:Listener="hideModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Tarefa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control"
                    wire:model="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text"
                    class="form-control"
                    wire:model="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Rm</label>
                    <input type="text"
                    class="form-control"
                    wire:model="rm">
                </div>
              
                
            </div>
            <div class="modal-footer">
                <button type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
                >Cancelar</button>
                <button type="button"
                class="btn btn-primary"
                wire:click="salvar">Salvar</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            Livewire.on('fecharModalEdicao', function(){
                var modal = document.getElementById('editModal');
                var modalInstance = bootstrap.Modal.getInstance(modal);

                if(modalInstance){
                    modalInstance.hide();
                } else {
                    var newModal = new bootstrap.modal(modal);
                    newModal.hide();
                }

                document.querySelectorAll('.modal-backdrop')
                .forEach(el => el.remove());
                document.body.classList.remove('modal-open');
            });
        });
    </script>
    
</div>