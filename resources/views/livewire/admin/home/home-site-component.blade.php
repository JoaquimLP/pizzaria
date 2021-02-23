<div class="container">
    <div class="row">
      <div class="col">
        @if (empty($homeSite))
            @include("livewire.admin.home.$view")
        @else
            <div class="card-body my-2">
                <a wire:click.prevent="edit({{$homeSite->id}})" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Editar
                </a>
            </div>
            <div class="collapse active" id="collapseExample" wire:ignore.self>
                @include("livewire.admin.home.$view")
            </div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col">
        @include("livewire.admin.home.show")
      </div>
    </div>
</div>
