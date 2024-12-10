<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Team::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'team_name' => 'required|string|max:255',
        ]);

        return Team::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idteams)
    {
        return Team::findOrFail($idteams); // Return a specific team
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $idteams)
    {
        $team = Team::findOrFail($idteams);
        $team->update($request->all());

        return $team;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idteams)
    {
        $team = Team::findOrFail($idteams);
        $team->delete();

        return response(null, 204); 
    }
}
