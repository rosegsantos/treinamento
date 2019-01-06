@extends('layout.app', ["current" => "produtos"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto"
                           id="nomeProduto" placeholder="Produto">

                    <label for="estoqueProduto">Estoque do Produto</label>
                    <input type="text" class="form-control" name="estoqueProduto"
                           id="estoqueProduto" placeholder="Estoque">

                    <label for="nomeProduto">Preço do Produto</label>
                    <input type="text" class="form-control" name="precoProduto"
                           id="precoProduto" placeholder="Preço">

                    <label for="categoriaProduto">Categoria do Produto</label>

                    <select name="categoriaProduto" class="form-control" name="categoriaProduto"
                            id="categoriaProduto" placeholder="categoriaProduto">
                        <option>Nome da Categoria</option>
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

