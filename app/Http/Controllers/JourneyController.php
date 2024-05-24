<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journey;

class JourneyController extends Controller
{
    public function index()
    {
        $journeys = Journey::all();
        //eventuale logica di filtraggio

        return view('journeys.index', compact('journeys'));
    }
}
