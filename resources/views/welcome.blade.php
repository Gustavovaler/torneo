@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{secure_asset('css/index.css')}}">
<div class="">
    <div class="row">
        <div class="col-md-6">
            <div class="title">
                 <h1 >Breakpoint Tennis</h1>
            </div>
            <div class="subtitle">
                Torneo 22/08/2021
            </div>
            <div class="players">
                <span class="subheader">Paricipantes:</span>
                <ul>
                    @foreach ($jugadores as $jugador)
                        <li>{{$jugador->nombre}}</li>
                    @endforeach

                </ul>
            </div>
        </div>
        <hr>
        <div class="col-md-6">
            <div class="resultados">
                <h4 class="ml-3">Resultados</h4>
                @foreach ($partidos as $partido)
                <div class="card">
                    <div class="card-body">
                         {{$partido->name_1()}}  vs. {{$partido->name_2()}} --  <strong>{{$partido->resultado_jug_1}} / {{$partido->resultado_jug_2}}</strong>
                    </div>
                </div>



                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
