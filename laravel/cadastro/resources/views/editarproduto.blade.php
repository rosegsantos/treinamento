@extends('layout.app', ["current" => "produtos"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos/{{$prod->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" value="{{$prod->nome}}"
                           id="nomeProduto" placeholder="Produto">

                    <label for="estoqueProduto">Estoque do Produto</label>
                    <input type="text" class="form-control" name="estoqueProduto" value="{{$prod->estoque}}"
                           id="estoqueProduto" placeholder="Estoque">

                    <label for="precoProduto">Preço do Produto</label>
                    <input type="text" class="form-control" name="precoProduto" value="{{$prod->preco}}"
                           id="precoProduto" placeholder="Preço">

                    <label for="categoriaProduto">Categoria do Produto</label>

                    <select name="categoriaProduto" class="form-control" name="categoriaProduto"
                            id="categoriaProduto" placeholder="categoriaProduto">
                        <option>{{$prod->categoria_id}}</option>
                        @foreach($cats as $c)
                            <option value="{{ $c->id }}">{{ $c->nome }}</option>
                        @endforeach

                    </select>

                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>


@endsection

