@extends('layouts.admin.app')

@section('content')


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                  <ul class="list-group">
                      <li class="list-group-item">Inicio</li>
                      <li class="list-group-item">Perfil</li>

                  </ul>
            </div>
            <div class="col-md-8">
                   Bienvenido, {{ session('USER')->names.' '.session('USER')->lastnames }} a su bandeja de entrada
            </div>
        </div>
    </div>

@endsection
