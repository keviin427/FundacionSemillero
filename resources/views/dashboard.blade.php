@extends('adminlte::page')

@section('title', 'TransferPro')

@section('content_header')
<div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <img src="" class="img-fluid" alt="">
        <h1 style="font-size: 80px; font-family: Arial, sans-serif;">SEMILLERO DE ESPERANZA</h1>
        <p>Bienvenido, {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
    </div>
    </div>
  </div>
@stop

@section('content')
<div class="container mt-5">
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop




@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop