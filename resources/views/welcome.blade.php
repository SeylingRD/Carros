<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Fonts -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    


    <title>Cars</title>

    <!-- Fonts -->
    <link href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed ">

    <nav  class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand text-white"  href="#">Dropdown      
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent " aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse " id="navbarSupportedContent">
            <ul  class="navbar-nav mr-auto ">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current )</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/carros">Carros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/marcas">Marcas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid mt-3 ">
       @yield('contenido')
    </div>

    <script src="{{ asset('static/vendor/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('static/bootstrap/js/bootstrap.js') }}"></script>
</body>

</html>