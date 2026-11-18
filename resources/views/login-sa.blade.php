<!DOCTYPE html>
<html>

<head>
    <title>INGRESO</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">

</head>
@session('status')
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ $value }}
    </div>
@endsession

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <a href="{{ url('/') }}">
                            <img src="{{ 'assets/images/LogoFundacion.png' }}" class="brand_logo" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center custom-margin">
                    <h5>INICIAR SESIÓN</h5>
                </div>

                <div class="d-flex justify-content-center form_container">
                    <form method="POST" action="{{ route('admingeneral.login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control input_user" placeholder="usuario"
                                required autofocus>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass"
                                placeholder="contraseña" required>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" class="btn login_btn">INGRESAR</button>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        ¿No tienes una cuenta? <a href="{{ route('registerTemplate') }}" class="ml-2">Registrarse</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>
