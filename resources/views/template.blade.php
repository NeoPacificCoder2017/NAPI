<!DOCTYPE html>
<html lang="fr">
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
        <title>NAPI</title>
        {{--  {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}  --}}
        
        <style> textarea { resize: none; } </style>
    </head>
    <body>
        @yield('contenu')
    </body>
</html>