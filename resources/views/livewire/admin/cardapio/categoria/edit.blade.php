

<div class="card-header">
    <h1>Editar Categoria</h1>
</div>
<div class="card-body">

    @include('livewire.admin.cardapio.categoria.form')
    <button wire:click="update({{$categoria_id}})" class="btn btn-primary">Atualizar</button>
    <button wire:click="default" class="btn btn-link">Cancelar</button> 
   
</div>