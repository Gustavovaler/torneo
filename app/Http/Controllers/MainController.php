<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use App\Models\Players;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $jugadores = Players::all();
        $partidos = Partido::all();
        return view('welcome', compact('jugadores', 'partidos'));
    }
}
