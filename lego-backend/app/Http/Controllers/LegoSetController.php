<?php

namespace App\Http\Controllers;
use App\Models\LegoSet;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class LegoSetController extends Controller
{

    public function store(Request $request)
{

    $legoSets = LegoSet::all();
    return response()->json($legoSets);
    // Validáljuk a beérkező kérést, hogy megfelelő formátumban érkezzenek az adatok
    $request->validate([
        'number' => 'required|string',
        'theme_id' => 'required|integer',
        'subtheme' => 'nullable|string',
        'year' => 'required|string',
        'setName' => 'required|string',
        'minifigs' => 'required|integer',
        'pieces' => 'required|integer',
    ]);

    // Az új LEGO készlet létrehozása az adatbázisban
    $legoSet = LegoSet::create([
        'number' => $request->number,
        'theme_id' => $request->theme_id,
        'subtheme' => $request->subtheme,
        'year' => $request->year,
        'setName' => $request->setName,
        'minifigs' => $request->minifigs,
        'pieces' => $request->pieces,
    ]);



    // Visszaadjuk az újonnan létrehozott LEGO készletet JSON formátumban
    return response()->json($legoSet, 201);
}



}
