@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>Crear Jugador</h3>
    <hr>
    <div class="row mt-5">
        <div class="col-md-6">
            <form action="{{url('/partidos')}}" method="POST" class="form-group">
                @csrf
                <label for="">Juagodr 1</label><br>
                <select name="jugador_1" id="" class="form-control" required>
                    <option value="" disabled selected>--Seleccione  jugador 1--</option>
                    @foreach ($jugadores as $jugador)
                        <option value="{{$jugador->id}}">{{$jugador->nombre}}</option>
                    @endforeach
                </select>    <br>
                <label for="">Resultado</label>
                <input type="number" name="resultado_jug_1" class="form-control" required>

                <br>
                <label for="">Juagodr 2</label><br>
                <select name="jugador_2" id="" class="form-control" required>
                    <option value="" disabled selected>--Seleccione  jugador 1--</option>
                    @foreach ($jugadores as $jugador)
                        <option value="{{$jugador->id}}">{{$jugador->nombre}}</option>
                    @endforeach
                </select>
                <br>
                <label for="">Resultado</label>
                <input type="number" name="resultado_jug_2" class="form-control" required>
                <br><br>

                <input type="submit" class="btn btn-success btn-block">
            </form>
        </div>
    </div>
</div>

@endsection
