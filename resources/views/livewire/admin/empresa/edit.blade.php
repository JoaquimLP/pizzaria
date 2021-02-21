

<div class="card-header">
    <h1>Editar Categoria</h1>
</div>
<div class="card-body">
    @include('livewire.admin.empresa.form')
    <button wire:click.prevent="update({{$empresa_id}})" class="btn btn-primary">Atualizar</button>
    <button wire:click="default" class="btn btn-link">Cancelar</button>
</div>
