<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/main.min.css" />
    <link rel="stylesheet" href="/assets/css/@yield('css').min.css" />
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand" href="#">
                    <img src="/assets/img/logos/logo.png" alt="" />
                </a>
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/sobre">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <footer>
        <div class="footer-item" id="sns">
            <a href="#">
                <img src="/assets/img/icons/Instagram.svg" alt="Acesse o instagram">
            </a>
            <a href="#">
                <img src="/assets/img/icons/WhatsApp.svg" alt="Acesse o whatsapp">
            </a>
            <a href="#">
                <img src="/assets/img/icons/Facebook.svg" alt="Acesse o facebook">
            </a>
        </div>
        <div class="footer-item" id="company">
            <img src="/assets/img/logos/circle-logo.png" alt="Logo Studio Angel Nishiharo">
            <p>
                © 2022 Angelica Nishiharo Kono. 44.123.778/0001-63
            </p>
        </div>
        <div class="footer-item" id="company-info">
            <p>(11) 97171-8424</p>
            <p>Rua Professor Leopoldo Paperine Nº 50</p>
            <p>studio@angelnishiharo.com</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
