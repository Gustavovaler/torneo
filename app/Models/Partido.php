<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    public function name_1(){
        return Players::find($this->jugador_1)->nombre;
    }
    public function name_2(){
        return Players::find($this->jugador_2)->nombre;
    }
}
