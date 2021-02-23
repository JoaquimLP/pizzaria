<div class="card-header">
    <h1>{{$title}}</h1>
</div>
<div class="card-body">
    @include('livewire.admin.home.form')
    <button wire:click.prevent="store" class="btn btn-primary">Adicionar</button>
</div>
