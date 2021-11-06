@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{secure_asset('css/index.css')}}">
<div class="">
    <div class="row">
        <div class="col-md-6">
            <div class="title">
                 <h3 >Breakpoint Tennis</h3>
                 <p>Torneo 08 Nov 2021 <br> Individual Masculino</p>
            </div>

        <hr>
        <div class="actions">

        </div>
        <div class="col-md-6">
            <div class="resultados">
                {{-- <h4 class="ml-3">Resultados</h4> --}}
                <hr>
                <h5>Grupo:    A</h5>
                @foreach ($partidos as $partido)
                    <div class="table-wrap">
                        <table>
                            <tr>
                                <td class="player-name">Jugador 1</td>
                                <td class="float-right">6</td>
                            </tr>
                            <tr>
                                <td class="player-name">Jugador 2</td>
                                <td class="float-right">3</td>
                            </tr>

                        </table>
                         {{-- {{$partido->name_1()}}  vs. {{$partido->name_2()}} --  <strong>{{$partido->resultado_jug_1}} / {{$partido->resultado_jug_2}}</strong> --}}


                    </div>

                @endforeach
                <br>
                <h5>Grupo:    B</h5>
                @foreach ($partidos as $partido)
                    <div class="table-wrap">
                        <table>
                            <tr>
                                <td class="player-name">Jugador 1</td>
                                <td class="float-right">6</td>
                            </tr>
                            <tr>
                                <td class="player-name">Jugador 2</td>
                                <td class="float-right">3</td>
                            </tr>

                        </table>
                         {{-- {{$partido->name_1()}}  vs. {{$partido->name_2()}} --  <strong>{{$partido->resultado_jug_1}} / {{$partido->resultado_jug_2}}</strong> --}}


                    </div>

                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
