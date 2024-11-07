<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio - Semillero De Esperanza</title>

    <!-- Enlaces a CSS externos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <!-- Enlace al CSS de la página personalizada -->
    <link rel="stylesheet" type="text/css" href="assets/custom-welcome.css">
</head>

<body class="home">
    <!-- Contenedor de la sección de inicio -->
    <div class="container my-5">
        <!-- Header con el logo y navegación -->
        <header class="header header-with-topbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">
                    <img src="{{ 'assets/images/cropped-logo-semillero-2.png' }}" alt="Semillero De Esperanza"
                        style="width: 150px;">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('loginTemplate') }}" class="btn btn-primary mx-2">Ingresar</a>
                                </li>
                                @if (Route::has('registerTemplate'))
                                    <li class="nav-item">
                                        <a href="{{ route('registerTemplate') }}" class="btn btn-secondary">Registro</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Sección de Bienvenida -->
        <section id="inicio" class="text-center my-5">
            <h1>Bienvenido a Semillero Esperanza</h1>
            <p>Sembrando en comunidades, transformamos corazones.</p>
        </section>

        <!-- Sección de Servicios -->
        <!-- Sección de Servicios -->
        <section id="servicios" class="my-5">
            <h2 class="text-center">NUESTRAS ÁREAS DE IMPACTO SON:</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ 'assets/images/Logo-Fisica.png' }}" alt="Ícono Física"
                                style="width: 50px; height: 50px;">
                            <h5 class="card-title">Física</h5>
                            <p class="card-text">Aportamos para cubrir necesidades básicas como alimentación, vestido,
                                educación entre otros, siendo esta una excelente manera de demostrar el amor de Dios.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">

                            <img src="{{ 'assets/images/Logo-Espiritual.png' }}" alt="Ícono Espiritual"
                                style="width: 50px; height: 50px;">
                            <h5 class="card-title">Espiritual</h5>
                            <p class="card-text">Fomentamos una restauración integral a través de una relación personal
                                con Dios por medio de su palabra.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ 'assets/images/Logo-Socio-Afectiva.png' }}" alt="Ícono Socio-afectiva"
                                style="width: 50px; height: 50px;">
                            <h5 class="card-title">Socio-afectiva</h5>
                            <p class="card-text">Ayudamos a establecer relaciones sanas, mediante la ayuda psicológica,
                                para fomentar la autoestima y la recuperación del vínculo familiar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
