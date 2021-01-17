

<div class="card-header">
    <h1>Editar Ingredientes</h1>
</div>
<div class="card-body">
    @include('livewire.admin.cardapio.ingredientes.form')
    <button wire:click.prevent="update({{$ingrediente_id}})" class="btn btn-primary">Atualizar</button>
    <button wire:click="default" class="btn btn-link">Cancelar</button> 
</div>