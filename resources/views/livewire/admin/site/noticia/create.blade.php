<div class="card-header">
    <h1>Cadastrar Notícia</h1>
</div>
<div class="card-body">
    @include('livewire.admin.site.noticia.form')
    <button wire:click.prevent="store" class="btn btn-primary">Adicionar</button>
</div>
@if ($message)
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
@endif
