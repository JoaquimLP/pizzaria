<div class="card-header">
    <h1>Adicionar uma nova Categoria</h1>
</div>
<div class="card-body">
    <form class="ml-2" action="" method="post" wire:submit.prevent="store">
        @include('livewire.admin.cardapio.categoria.form')
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>