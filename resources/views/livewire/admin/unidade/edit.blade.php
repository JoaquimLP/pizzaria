

<div class="card-header">
    <h1>Editar Unidade</h1>
</div>
<div class="card-body">

    @include('livewire.admin.unidade.form')
    <button wire:click="update({{$unidade_id}})" class="btn btn-primary">Atualizar</button>
    <button wire:click="default" class="btn btn-link">Cancelar</button> 
   
</div>