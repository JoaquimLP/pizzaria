<div class="container my-3" style="height: 470px;">
    <div class="col-sm-12">
        <div class="row">
            <div class="card col-sm-5">
                @include("livewire.admin.unidade.$view")
            </div>
            <div class="card col-sm-7">
                <div class="card-header">
                    <h1>Listar de unidade</h1>
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
                            @foreach ($unidades as $unidade)
                                <tr>
                                    <td scope="row">{{$unidade->id}}</td>
                                    <td>{{$unidade->nome}}</td>
                                    <td>
                                        <button wire:click="edit({{$unidade->id}})" class="btn btn-primary">Editar</button>
                                        <button wire:click="destroy({{$unidade->id}})" class="btn btn-danger">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$unidades->links()}}
                </div>
            </div>
        </div>
    </div>
</div>