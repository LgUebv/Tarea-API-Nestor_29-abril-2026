<?php

namespace App\Http\Controllers;

use App\Models\Rentas;
use Illuminate\Http\Request;

class RentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentas = Rentas::all();
        return response()->json($rentas, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rentas = Rentas::create($request->all());
        return response()->json($rentas, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rentas $rentas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rentas $rentas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rentas $rentas)
    {
        //
    }
}
