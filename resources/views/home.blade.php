<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/main.min.css" />
    <link rel="stylesheet" href="/assets/css/project.min.css" />
    <link rel="stylesheet" href="/assets/css/home.min.css" />
    <title>Studio Angel Nishiharo</title>
</head>

<body>
    <div id="splash">
        <img src="/assets/img/logos/circle-logo.png" alt="">
        <h3 class="studio-name">
            <span class="name-fragment">Studio</span>
            <span class="name-fragment">Angel</span>
            <span class="name-fragment">Nishiharo</span>
        </h3>
    </div>
    <section id="hero">
        <img id="angelica" src="/assets/img/angelica.webp" alt="Angélica Nishiharo">
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
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/services">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/studio">Studio</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="hero-container">
            <div class="hero-content d-flex flex-column align-items-center">
                <h2>Beleza na medida certa</h2>
                <a class="button" href="/services">Conheça Mais</a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="/assets/js/splash.js"></script>
</body>

</html>
