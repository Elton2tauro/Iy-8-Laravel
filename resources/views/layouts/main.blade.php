<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!--google fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!--css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!--css da aplicacao -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
            <img src="/img/cursoIcon.png" alt="" srcset="">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/events/create">Criar Evento</a>
                    </li>

                    <a href="/events/contato" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/produto" class="nav-link">Cadastrar</a>
                    </li>
                </ul>

            </div>
        </nav>





    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">
                    {{session('msg')}}
                </p>
                @endif
                @yield('content')
            </div>

        </div>
    </main>
    <footer>
        <p>HDC Events &copy; 2020</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>