<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Calculadora</title>
    
</head>
<body class="p-3 mb-2 bg-dark text-white">

    <div class="container" >
    <a class="display-4" href="{{ route('calculadora.index')}}">Resultado</a><style>a:link{text-decoration: none; color: inherit;} .display-4{color: #fff;} </style>
    
    <p class="text-secondary">La Operacion de {{ $a }} y {{ $b }} es:</p>
    <h4>La Suma es: <span class="text-primary">{{ $s }}</span> </h4>
    <h4>La Resta es: <span class="text-primary">{{ $r }}</span> </h4>
    <h4>La Multiplicacion es: <span class="text-primary">{{ $m }}</span> </h4>
    <h4>La Division es: <span class="text-primary">{{ $d }}</span> </h4>
    @if ($p == 0)
        
    @else
    <br>
        <h4 font-italic>La Potencia de {{$c}} con base {{$e}} es: <span class="text-primary">{{ $p }}</span> </h4>
        
    @endif

    <a class="btn btn-secondary btn-lg btn-block" href="{{ route('calculadora.index')}}">De Nuevo</a>

    
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

