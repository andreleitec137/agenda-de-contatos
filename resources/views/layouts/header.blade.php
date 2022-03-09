<head>
<!--BOOTSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- FONT AWESOME -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">

<!-- JQUERY -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<!-- ARQUIVOS ESTATICOS -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
@section('header')
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">Lista de Contatos</a>
        </li>   
        
        <li class="nav-item">
            <a class="nav-link" href="/add">Adicionar Contato</a>
        </li>   
      
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Procurar Contato" aria-label="Search">
        </form>
    </div>
    </nav>
</header>
@stop

@yield('header')
<main class="py-4">
            @yield('content')
</main>

