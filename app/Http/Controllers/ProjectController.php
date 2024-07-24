<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $types = Type::all();
        return view('projects.create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type_id' => 'nullable|exists:types,id',
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index')->with('success', 'Progetto creato con successo');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $types = Type::all();
        return view('projects.edit', compact('project', 'types'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type_id' => 'nullable|exists:types,id',
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Progetto aggiornato con successo');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Progetto eliminato con successo');
    }
}
