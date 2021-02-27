<div class="card-header">
    <h1>{{-- {{$title}} --}}</h1>
</div>
<div class="card-body">
    @include('livewire.admin.site.depoimento.form')
    <button wire:click.prevent="update({{$depoimento_id}})" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Atualizar</button>
    <button wire:click="default" class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Cancelar</button>
</div>
