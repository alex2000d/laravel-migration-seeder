<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train; 


class TrainController extends Controller
{
    public function index(){
        // Recupero tutti i record dalla tabella 'trains'
        $trains = Train::all();
        

        // Passo i dati a schermo
        return view('trains.index', compact('trains'));
    }
}
