<?php

namespace App\Http\Controllers\admin;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Project $project)
    {
        $projects = Project::all();
        return view("admin.projects.index", compact("project"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.projects.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate();
        //

        $img_path = Storage::put('uploads', $data['image']);

        $project = new Project;


        $project->fill($data);

        $project->save();

        return to_route("admin.projects.index")
            ->with("success", "Progetto aggiunto con successo")
            ->with("type", "success");

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project = Project::find($project);
        return view("admin.projects.show", compact("show"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $project = Project::find($project);
        return view("admin.projects.edit", compact("project"));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([]);


        $request->update($data);

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return to_route(("admin.categories.index"))->with('message', "Progetto $project->title eliminato con successo");
        //
    }
}
