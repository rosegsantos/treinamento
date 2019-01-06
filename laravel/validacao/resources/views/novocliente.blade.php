<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="description" content="jQuery-Mask-Plugin - A jQuery plugin to make field masks" />
    <meta name="author" content="Igor Escobar" />
    <title>jQuery Mask Plugin - A jQuery Plugin to make masks on form fields and html elements.</title>



    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css" media="screen">

</head>

<body>

<section class="examples">
    <div class="container">
        <h3 id="examples">View in action</h3>

        <div class="inputs">


            <div class="input-group">
                <label for="cpf">CPF</label>
                <input type="text" class="cpf" id="cpf"/>
            </div>


        </div>


    </div>
</section>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/examples.js')}}"></script>

</body>
</html>


<!--<html>
<head>
    <title>Cadastro de Cliente</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
                                <input  type="text" id="nome"
                                        class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}"
                                        name="nome" placeholder="Nome do Cliente">

                                @if($errors->has('nome'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nome') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="nome">Idade do Cliente</label>
                                <input  type="number" id="idade"
                                        class="form-control {{ $errors->has('idade') ? 'is-invalid' : '' }}"
                                        name="idade" placeholder="Idade do Cliente">

                                @if($errors->has('idade'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('idade') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="endereco">Endereço do Cliente</label>
                                <input  type="text" id="postal-code"
                                        class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}"
                                        name="postal-code" placeholder="Endereco do Cliente">

                                @if($errors->has('endereco'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('endereco') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail do Cliente</label>
                                <input  type="text" id="email"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        name="email" placeholder="E-mail do Cliente">

                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <div class="input-group">
                                <label for="cep">ZIP Code</label>
                                <input type="text" class="cep" id="cep"/>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="submit" class="btn btn-primary btn-sm">Cancelar</button>
                        </form>
                    </div>


                </div>
            </div>

        </div>
    </main>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/mask.js')}}" type="text/javascript"></script>
</body>
</html>-->