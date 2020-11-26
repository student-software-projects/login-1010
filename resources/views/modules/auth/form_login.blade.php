@extends('layouts.auth.app')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="{{ route('auth.auth') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">autenticarme</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
