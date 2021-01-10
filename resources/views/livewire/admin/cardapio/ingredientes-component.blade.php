<div class="container my-3" style="height: 470px;">
    <div class="col-sm-12">
        <div class="row">
            <div class="card col-sm-5">
                @include("livewire.admin.cardapio.ingredientes.$view")
            </div>
            <div class="card col-sm-7">
                <div class="card-header">
                    <h1>Listar de ingrediente</h1>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ingredientes as $ingrediente)
                                <tr>
                                    <td scope="row">{{$ingrediente->id}}</td>
                                    <td>{{$ingrediente->nome}}</td>
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
        </div>
    </div>
</div>