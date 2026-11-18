<!DOCTYPE html>
<html>

<head>
    <title>INGRESO</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">

</head>

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
                

                

                <div class="container h-100">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <a href="{{ url('/') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-home"></i>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center custom-margin">
                    <h5>HOME</h5>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>
