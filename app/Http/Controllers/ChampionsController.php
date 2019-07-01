<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Champion\Champion;

class ChampionsController extends Controller
{
    public function index ()
    {
        return view('champions.index');
    }

    public function show(Champion $champion) 
    {

        // $project = Project::findOrFail($id);

        // return $project;

        return $champion;

        return view('projects.show', compact('project'));

    }
}
