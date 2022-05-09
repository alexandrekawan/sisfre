<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('titulo') </title>
    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.modif.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <noscript>
      <div class="container"> 
          <div class="alert alert-danger btn-lg col-md-8 col-md-offset-2 text-center">
            <span class="glyphicon glyphicon-remove-sign"></span>  O Javascript está desabilitado, o sistema não irá funcionar corretamente. Habilite-o!! 
          </div>
      </div>
   </noscript>

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>
   
    @yield('scripts')

</head>

<body>
  
    @yield('conteudo')

    <script src="{{ asset('js/app.js') }}"></script>
</div>
</body>
</html>