<?php

namespace App\Http\Controllers;

use App\Models\Movie; //quando nel metodo index uso il model devo recuperarlo usando use
use Illuminate\Http\Request;

class MovieController extends Controller
{   
    // 1. definisco funzione che gestisce la rotta (per convenzione si chiama index)
    public function index(){

        //recupero i dati dal db attraverso il model
        $movies = Movie::all(); //all() metodo per recuperare tutti i campi della tabella
        dd($movies);

        //ritorno della vista home che laravel va a cercare dentro a resources, dentro views
        return view('home', compact('movies')); 
    }
}
