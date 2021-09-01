@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Registro de vivienda</h5>
            <p class="card-text">Formulario de registro de nuevas propiedades</p>
            <a href="{{ url('/formulario') }}" class="btn btn-primary">Acceder</a>
        </div>
    </div>
</div>
@endsection
