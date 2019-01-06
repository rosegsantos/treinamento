<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Login</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <!-- EXIBINDO ERROS De VALIDAÇÃO DE DADOS -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- EXIBINDO AVISO DE CREDENCIAL INVÁLIDA -->
                @if(session('msg'))
                    <div class="alert alert-danger">{{session('msg')}}</div>
                @endif
                <form action="login" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="login">Email:</label>
                        <input type="text" name="login" id="login" class="form-control" placeholder="Seu Login" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="****" required>
                    </div>
                    <button type="submit" class="btn btn-sm btn-secondary">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
   </body>
</html>