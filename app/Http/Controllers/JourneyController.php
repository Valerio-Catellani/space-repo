<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journey;
use App\Models\Planet;

class JourneyController extends Controller
{
    public function index()
    {
        $journeys = Journey::all();
        //eventuale logica di filtraggio

        return view('journeys.index', compact('journeys'));
    }

    public function show($id)
    {
        $journey = Journey::findOrFail($id);
        $data = [
            'journey' => $journey,
            'first_planet' => Planet::where('nome', $journey->pianeta_di_partenza)->first(),
            'last_planet' => Planet::where('nome', $journey->pianeta_di_destinazione)->first()
        ];
        return view('journeys.show', $data);
    }
}
