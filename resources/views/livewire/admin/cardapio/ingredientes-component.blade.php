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
                                        <a class="nav-link @if ($nav_ills != true ) active @endif tamanho-font-col-texto text-dark" data-toggle="pill" href="#nav-item-02">Listar de ingrediente</a>
                                    </li>
                                    <li class="nav-item">
                                        <a wire:click="create" class="nav-link @if ($nav_ills == true ) active @endif  tamanho-font-col-texto text-dark" data-toggle="pill" href="#nav-item-01">{{$title}}</a>
                                    </li>
                                </ul>
                                <div class="tab-content bg-light" id="nav-pills-content">
                                    <div class="tab-pane fade @if ($nav_ills != true ) show active @endif" id="nav-item-02" role="tabpanel" aria-labelledby="nav-item-02-tab" style="height: 600px;">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Nome</th>
                                                        <th scope="col">Quantidade</th>
                                                        <th scope="col">Categoria</th>
                                                        <th scope="col">Unidade</th>
                                                        <th scope="col">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($ingredientes as $ingrediente)
                                                        <tr>
                                                            <td scope="row">{{$ingrediente->id}}</td>
                                                            <td>{{$ingrediente->nome}}</td>
                                                            <td>{{$ingrediente->quantidade}}</td>
                                                            <td>{{$ingrediente->categoria->nome}}</td>
                                                            <td>{{$ingrediente->unidade->nome}}</td>
                                                            <td>
                                                                <button wire:click="edit({{$ingrediente->id}})" class="btn btn-primary">Editar</button>
                                                                <button wire:click="destroy({{$ingrediente->id}})" class="btn btn-danger">Excluir</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$ingredientes->links()}}
                                        </div>
                                    </div>      
                                    <div class="tab-pane fade @if ($nav_ills == true ) show active @endif" id="nav-item-01" role="tabpanel" aria-labelledby="nav-item-01-tab">
                                        @include("livewire.admin.cardapio.ingredientes.$view")
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

@push('script')
    <script>    
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        })

        window.addEventListener("openModal", event => {
            $("#openModal").modal('hide');
        })

        window.addEventListener("openModal", event => {
            console.log("to");
            $("#openModal").modal('show');
        })

        window.addEventListener("closeModal", event => {
            console.log("to");
            $("#openModal").modal('hide');
        })
    </script>
@endpush 