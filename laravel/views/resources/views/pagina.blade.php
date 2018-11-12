<html>
<head>
    <!-- link href="{{asset('css/app.css')}}" rel="stylesheet">-->
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <!--<div class="alert alert-primary" role="alert">
        Um simples alerta primary. Olha só!
    </div>->

    <!--<script src="{{asset('js/app.js')}}" type="text/javascript"> </script>-->


    @alerta(['tipo'=>'danger','titulo'=>'Erro fatal'])
        <strong>Erro: </strong> Sua mensagem de erro - DANGER.
    @endcomponent

    @alerta(['tipo'=>'warning', 'titulo'=>'Erro fatal'])
        <strong>Erro: </strong> Sua mensagem de erro - WARNING.
    @endalerta

    @alerta(['tipo'=>'success', 'titulo'=>'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro - SUCESS.
    @endalerta

    @alerta(['tipo'=>'primary', 'titulo'=>'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro - PRIMARY.
    @endalerta

    @alerta(['tipo'=>'secondary', 'titulo'=>'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro - SECONDARY.
    @endalerta

    @alerta(['tipo'=>'info', 'titulo'=>'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro - INFO.
    @endalerta

    @alerta(['tipo'=>'dark', 'titulo'=>'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro - DARK.
    @endalerta


    <script src="{{URL::to('js/app.js')}}" type="text/javascript"> </script>


</body>
</html>