<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', ['teams' => $teams]);
    }
    public function show($id)
    {
        $team = Team::with('players')->find($id);
        return view('teams.show', compact('team'));
    }


    //     public function show($id)
    //     {
    //         $team = Team::find($id);
    //         return view('teams.show', compact('team'));
    //     }
}