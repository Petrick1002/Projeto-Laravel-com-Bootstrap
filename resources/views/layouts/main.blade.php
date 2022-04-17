<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="\img\beard.ico" type="image/x-icon">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script scr="/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <header>

            <div class="container-fluid bg-dark text-white p-3 fixed-top">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
                        <div class="container-fluid">
                            <a class="navbar-brand text-white" href="#">
                                <img src="\img\mhm_logo.png" class="img-fluid rounded-circle">
                            </a>
                            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon text-white"></span>
                            </button>
                            <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
                                <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="#youtube">Youtube</a>
                                </li>
                                <li class="nav-item text-white">
                                <a class="nav-link text-white" href="#instagram">Instagram</a>
                                </li>
                                <li class="nav-item dropdown text-white">
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </li>
                            </ul>
                            {{--
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Digite aqui..." aria-label="Search">
                                <button class="btn btn-outline-light" type="submit">Procurar</button>
                            </form>
                            --}}
                            </div>
                        </div>
                </nav>
        </div>
    </div>
</div>
        </header>

        @yield('content')

        <footer>
            <div class="container-fluid bg-dark text-white p-3">
                <div class="row align-items-center">
                    <div class="col text-center">
                    <p> Dashboard desenvolvido por Patrick Lucas </p>
                    </div>
                </div>
            </div> 
        </footer>
    </body>
</html>