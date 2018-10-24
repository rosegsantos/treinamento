<html>

<head>
    <title>Meu titulo - @yield('titulo') </title>
</head>

<body>
    @section('barralateral')
        <p>Esta parta da seção é do template pai</p>
    @show

    <div>
        @yield('conteudo')
    </div>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 23/10/2018
 * Time: 18:41
 */