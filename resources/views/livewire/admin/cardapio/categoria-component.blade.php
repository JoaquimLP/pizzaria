<div class="container my-3" style="height: 500px;">
    <div class="col-sm-12">
        <div class="row">
            <div class="card col-sm-5">
                @include("livewire.admin.cardapio.categoria.$view")
            </div>
            <div class="card col-sm-7">
                <div class="card-header">
                    <h1>Listar de categoria</h1>
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
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td scope="row">{{$categoria->id}}</td>
                                    <td>{{$categoria->nome}}</td>
                                    <td>
                                        <button wire:click="edit({{$categoria->id}})" class="btn btn-primary">Editar</button>
                                        <button wire:click="destroy({{$categoria->id}})" class="btn btn-danger">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$categorias->links()}}
                </div>
            </div>
        </div>
    </div>
</div>