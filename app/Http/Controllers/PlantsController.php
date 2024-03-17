<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Plant;
use App\Models\Garden;

class PlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the cursor from the request (e.g., 'prev' or 'next')
        // $cursor = $request->input('cursor');
        // // Fetch data based on the cursor
        // $plants = Plant::cursorPaginate(10, $cursor);
        // // Return the paginated data to the Inertia component
        // $plants = Plant::cursorPaginate(10);
        // dd('testing 1');

        $plants = Plant::all();
        
        return Inertia::render('Plants/Index', [
            'plants' => $plants,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $plants = Plant::all();
        return Inertia::render('Plants/Create', [
            'plants' => $plants,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //returns a array of Plant objects
        //and garden id
        //I need this into a pivot table
        // $garden = Garden::find($request->garden_id);
        // $garden->plants()->attach($request->plants);

        $plants = Plant::find($request->plants);
        foreach ($plants as $plant) {
            $plant->gardens()->attach($request->garden_id);
        }

        // $plants = Plant::find($request->plants);
        // $plants->gardens()->attach($request->garden_id);
        dd($plants);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $plant = Plant::find($id);
        return Inertia::render('Plants/Show', [
            'plant' => $plant,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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

    public function create_garden_plant(string $id)
    {
        //show a form that saves plants to garden
        $plants = Plant::all();
        // dd($plants);
        return Inertia::render('Plants/Create', [
            'plants' => $plants,
            'garden_id' => $id,
        ]);
    }
}
