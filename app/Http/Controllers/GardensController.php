<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Garden;
use Inertia\Inertia;

class GardensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = auth()->user();
        //get all the gardens for the user
        $gardens = Garden::where('user_id', $user->id)->get();
        return Inertia::render('Gardens/Index', [
            'gardens' => $gardens,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Gardens/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->garden['name']);

        // $request->validate([
        //     'name' => 'required',
        //     'location' => 'required',
        //     'description' => 'required',
        // ]);

        $validatedData = $request->validate([
            'garden.name' => 'required|max:255',
            // other validation rules...
        ]);

        Garden::create([
            'user_id' => auth()->user()->id,
            'name' => $request->garden['name'],
            'location' => $request->garden['location'],
            'description' => $request->garden['description'],
        ]);

        return redirect()->route('gardens.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $garden = Garden::find($id);

        // dd($garden->name);
        return Inertia::render('Gardens/Show', [
            'garden' => $garden,
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
        //delete the garden
        dd($id);
        Garden::destroy($id);
        return redirect()->route('gardens.index');

    }
}
