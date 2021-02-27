<div class="card-header">
    <h1>Cadastrar Depoimentos</h1>
</div>
<div class="card-body">
    @include('livewire.admin.site.depoimento.form')
    <button wire:click.prevent="store" class="btn btn-primary">Adicionar</button>
</div>
