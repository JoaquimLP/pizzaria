<div class="card-header">
    <h1>Cadastra dados da empresas</h1>
</div>
<div class="card-body">
    @include('livewire.admin.site.sobre.form')
    <button wire:click.prevent="store" class="btn btn-primary">Adicionar</button>
</div>
