<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipuIncotermResource;
use App\Models\TipuIncoterm;
use Illuminate\Http\Request;

class TipuIncotermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipusIncoterms = TipuIncoterm::all();
        return TipuIncotermResource::collection($tipusIncoterms);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipusIncoterms = new TipuIncoterm();
        $tipusIncoterms->codi = $request->codi;
        $tipusIncoterms->nom = $request->nom;

        $tipusIncoterms->save();
        return new TipuIncotermResource($tipusIncoterms);
    }

    /**
     * Display the specified resource.
     */
    public function show(TipuIncoterm $tipuIncoterm)
    {
        $tipusIncoterms = TipuIncoterm::find($tipuIncoterm->id);
        return new TipuIncotermResource($tipusIncoterms);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipuIncoterm $tipuIncoterm)
    {
        $tipuIncoterm->codi = $request->codi;
        $tipuIncoterm->nom = $request->nom;

        $tipuIncoterm->save();
        return new TipuIncotermResource($tipuIncoterm);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipuIncoterm $tipuIncoterm)
    {
        $tipusIncoterms = TipuIncoterm::find($tipuIncoterm->id);
        $tipuIncoterm->delete();
        return new TipuIncotermResource($tipusIncoterms);
    }
}