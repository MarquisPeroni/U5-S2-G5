<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; 

class ProjectController extends Controller
{
    // Metodo per visualizzare l'elenco di tutti i progetti
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    // Metodo per visualizzare i dettagli di un singolo progetto
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Metodo per visualizzare il modulo di creazione di un nuovo progetto
    public function create()
    {
        return view('projects.create');
    }

    // Metodo per gestire il salvataggio di un nuovo progetto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index')->with('success', 'Progetto creato con successo.');
    }

    // Metodo per visualizzare il modulo di modifica di un progetto esistente
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // Metodo per gestire l'aggiornamento di un progetto esistente
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Progetto aggiornato con successo.');
    }

    // Metodo per gestire l'eliminazione di un progetto esistente
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Progetto eliminato con successo.');
    }
}


