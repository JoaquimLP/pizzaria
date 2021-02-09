<div class="card-header">
    <h1>Adicionar uma novo Produto</h1>
</div>
<div class="card-body">
    @include('livewire.admin.cardapio.produto.form')
    <button wire:click.prevent="store" class="btn btn-primary">Adicionar</button>
</div>