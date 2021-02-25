<div class="container">
    <div class="row">
      <div class="col">
        @if (empty($sobre))
            @include("livewire.admin.site.sobre.$view")
        @else
            <div class="card-body my-2">
                <a wire:click.prevent="edit({{$sobre->id}})" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Editar
                </a>
            </div>
            <div class="collapse active" id="collapseExample" wire:ignore.self>
                @include("livewire.admin.site.sobre.$view")
            </div>
        @endif
      </div>
    </div>
    <div class="row">
        <div class="col">
            @include("livewire.admin.site.sobre.show")
        </div>
    </div>
</div>
