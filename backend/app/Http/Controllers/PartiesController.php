<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partiesPath = storage_path('json/parties.json');
        return response()->json(json_decode(file_get_contents($partiesPath), true));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
