<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function addPlaces()
    {
        $regions = Region::all(); 
        return view('places.add_places', compact('regions')); 
    }
}
