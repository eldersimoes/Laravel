<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

         <link rel="stylesheet" href="/css/styless.css">  
         <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Algum titulo</h1>

        <img src="/img/banner.jpg" alt="Banner">

        @if(10>15)

            <p>a condição é true</p>
        
        @endif

        <p> {{$nome}} </p>

        @if($nome == "Pedro")
            <p>o nome é: {{$nome}};</p>
            <p>Ele tem: {{$idade}} anos;</p>
            <p>Sua profissão é: {{$profissao}}.</p>
        @else
            <p>o nome não é Pedro, é {{$nome}}</p>
        @endif

        @for($i = 0; $i <  count($arr); $i++)
            <p> {{$arr[$i]}} - {{$i}} </p>
            
            @if($i==2)
                <p>O i agora é 2</p>
            @endif

        @endfor

        @php
            $phpname = "João";
            echo $phpname;    
        @endphp
            
        <!--Comentario html aparece no inspecionar elemento compromete a segurança-->
        {{--comentario do blade nao aparece no inspecionar elemento mais seguro--}}

        @foreach ($nomes as $j)
            <p>{{$loop->index}} - {{$j}}</p>
        @endforeach
        

    </body>
</html>
