

<div class="card-header">
    <h1>Editar Produto</h1>
</div>
<div class="card-body">
    @include('livewire.admin.cardapio.produto.form')
    <button wire:click.prevent="update({{$produto_id}})" class="btn btn-primary">Atualizar</button>
    <button wire:click="default" class="btn btn-link">Cancelar</button> 
</div>