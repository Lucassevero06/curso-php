<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>

    </head>
    <body>
        <img src="/img/banner.jpg" alt="Banner">
        <h1>Hello World</h1>
        @if(10 > 5)
            <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome === "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome == "Lucas")
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e ele é {{ $profissao }}</p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($array); $i++)
            <p>{{ $array[$i] }} - {{ $i }}</p>
        @endfor

        @php 
            $name = "Lucas";
            echo $name;
        @endphp


        <!-- COMENTÁRIO HTML aparece no console --> 
        {{-- COMENTÁRIO BLADE não aparece no console --}}
    </body>
</html>