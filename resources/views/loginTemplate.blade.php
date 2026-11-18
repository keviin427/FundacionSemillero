<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
    
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="max-w-7xl mx-auto p-6 lg:p-8" style="margin-top: -20px;">
            <div class="flex justify-center">
                <div class="flex justify-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ 'assets/images/cropped-logo-semillero-2.png' }}" alt="Semillero De Esperanza" style="width: 400px;">
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Tarjeta de Agente -->
                    
                    <div class="col-md-4 d-flex justify-content-center mb-4">
                        <div class="user_card1">
                            <div class="d-flex justify-content-center">
                                <div class="brand_logo_container">
                                    <img src="{{ 'assets/images/ed-icon.png' }}" class="brand_logo" alt="Educador">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center ">
                                <p class="register_text">Administrador de <br>Área Educativa</p>
                            </div>
                            <a href="{{ url('/login-ed') }}">
                                <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" class="btn login_btn">INGRESAR</button>
                                </div>
                            </a>
                        </div>
                    </div>
            
                    <!-- Tarjeta de Jugador -->
                    <div class="col-md-4 d-flex justify-content-center mb-4">
                        <div class="user_card1">
                            <div class="d-flex justify-content-center">
                                <div class="brand_logo_container">
                                    <img src="{{ 'assets/images/sa-icon.png' }}" class="brand_logo" alt="SA">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center ">
                                <p class="register_text">Administrador <br>General</p>
                            </div>
                            <a href="{{ url('/login-sa') }}">
                                <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" class="btn login_btn">INGRESAR</button>
                                </div>
                            </a>
                        </div>
                    </div>
            
                    <!-- Tarjeta de Representante de Club -->
                    <div class="col-md-4 d-flex justify-content-center mb-4">
                        <div class="user_card1">
                            <div class="d-flex justify-content-center">
                                <div class="brand_logo_container">
                                    <img src="{{ 'assets/images/ps-icon.png' }}" class="brand_logo" alt="Psicologia">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center ">
                                <p class="register_text">Administrador de <br>Área Psicológica</p>
                            </div>
                            <a href="{{ url('/login-ps') }}">
                                <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" class="btn login_btn">INGRESAR</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

    </div>
    </div>
</body>

</html>
