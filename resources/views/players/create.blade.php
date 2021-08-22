@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>Crear Jugador</h3>
    <hr>
    <div class="row mt-5">
        <div class="col-md-6">
            <form action="{{url('/players')}}" method="POST" class="form-group">
                @csrf
                <label for="">Nombre</label><br>
                <input type="text" class="form-control" name="nombre" required><br>
                <br>
                <input type="submit" class="btn btn-success btn-block">
            </form>
        </div>
    </div>
</div>

@endsection
