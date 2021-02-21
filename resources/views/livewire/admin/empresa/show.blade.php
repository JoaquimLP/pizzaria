<h4 class="card-title mb-4">Dados da Empresa</h4>
<div class="row">
    <div class="col-md-6">
        <address>
            <p class="font-weight-bold">{{$empresa->nome ?? "Não Informado" }}</p>
            <p class="mb-2">Nome fantasia</p>
        </address>
    </div>
    <div class="col-md-6">
        <address>
            <p class="font-weight-bold">{{$empresa->razao_social ?? "Não Informado" }}</p>
            <p class="mb-2">Razão Social</p>
        </address>
    </div>
    <div class="col-md-4">
        <address>
            <p class="font-weight-bold">{{ !empty($empresa->cnpj) ? maskCnpj($empresa->cnpj) : "Não Informado" }}</p>
            <p class="mb-2">CNPJ</p>
        </address>
    </div>
    <div class="col-md-4">
        <address>
            <p class="font-weight-bold">{{!empty($empresa->telefone) ? maskTelefone($empresa->telefone) : "Não Informado" }}</p>
            <p class="mb-2">Telefone</p>
        </address>
    </div>
    <div class="col-md-4">
        <address>
            <p class="font-weight-bold">{{!empty($empresa->celular) ? maskTelefone($empresa->celular) : "Não Informado" }}</p>
            <p class="mb-2">Celular</p>
        </address>
    </div>
    <div class="col-md-2">
        <address>
            <p class="font-weight-bold">{{$empresa->estado ?? "Não Informado" }}</p>
            <p class="mb-2">UF</p>
        </address>
    </div>
    <div class="col-md-3">
        <address>
            <p class="font-weight-bold">{{$empresa->cidade ?? "Não Informado" }}</p>
            <p class="mb-2">Cidade</p>
        </address>
    </div>
    <div class="col-md-3">
        <address>
            <p class="font-weight-bold">{{$empresa->bairro ?? "Não Informado" }}</p>
            <p class="mb-2">Bairro</p>
        </address>
    </div>
    <div class="col-md-3">
        <address>
            <p class="font-weight-bold">{{!empty($empresa->cep) ? maskCep($empresa->cep) : "Não Informado"}}</p>
            <p class="mb-2">CEP</p>
        </address>
    </div>
    <div class="col-md-6">
        <address>
            <p class="font-weight-bold">{{$empresa->endereco ?? "Não Informado"}}</p>
            <p class="mb-2">Endereco</p>
        </address>
    </div>
    <div class="col-md-3">
        <address>
            <p class="font-weight-bold">{{$empresa->numero ?? "Não Informado"}}</p>
            <p class="mb-2">Numero</p>
        </address>
    </div>
    <div class="col-md-3">
        <address>
            <p class="font-weight-bold">{{$empresa->complemento ?? "Não Informado"}}</p>
            <p class="mb-2">Complemento</p>
        </address>
    </div>
    <div class="col-md-6">
        <address>
            <p class="font-weight-bold">{{$empresa->email ?? "Não Informado"}}</p>
            <p class="mb-2">E-mail</p>
        </address>
    </div>
    <div class="col-md-6">
        <address>
            <p class="font-weight-bold">{{$empresa->link_instagram ?? "Não Informado" }}</p>
            <p class="mb-2">Link do instagram</p>
        </address>
    </div>
    <div class="col-md-6">
        <address>
            <p class="font-weight-bold">{{$empresa->link_facebook ?? "Não Informado"}}</p>
            <p class="mb-2">Link do facebook</p>
        </address>
    </div>
    @if (!empty($empresa->logo))
        <div class="col-md-6">
            <address>
                <img src="{{url("storage/{$empresa->logo}")}}" alt="{{$empresa->nome}}" class="rounded-full h-10 w-10">
            </address>
        </div>
    @endif
</div>
