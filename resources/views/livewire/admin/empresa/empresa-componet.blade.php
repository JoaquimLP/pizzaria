<div class="container my-3">
    <div class="col-sm-12">
        <div class="row">
            <div class="card col-sm-12">
                <div class="cor-pills">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-12 my-4">
                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link @if ($nav_ills != true ) active @endif tamanho-font-col-texto text-dark" data-toggle="pill" href="#nav-item-02">Infomações da empresa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a wire:click="create" class="nav-link @if ($nav_ills == true ) active @endif  tamanho-font-col-texto text-dark" data-toggle="pill" href="#nav-item-01">{{$title}}</a>
                                    </li>
                                </ul>
                                <div class="tab-content bg-light" id="nav-pills-content">
                                    <div class="tab-pane fade @if ($nav_ills != true ) show active @endif" id="nav-item-02" role="tabpanel" aria-labelledby="nav-item-02-tab" style="height: 600px;">
                                        <div class="card-body">
                                            em desenvolvimento
                                        </div>
                                    </div>
                                    <div class="tab-pane fade @if ($nav_ills == true ) show active @endif" id="nav-item-01" role="tabpanel" aria-labelledby="nav-item-01-tab">
                                        @include("livewire.admin.empresa.$view")
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
