<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    public function show($id)
    {
        $project = Project::find($id);
        if (!$project) {
            return response()->json(['message' => 'Projet not found'], 404);
        }
        return response()->json($project);
    }

    public function addprojet(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'name' => 'required|string',
            'description' => 'required|string',
            'url' => 'required|string',
        ]);

        $project = new Project();
        $project->image = $request->image;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->url = $request->url;
        $project->save();

        return response()->json($project, 201);
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        if (!$project) {
            return response()->json(['message' => 'Projet not found'], 404);
        }

        $request->validate([
            'image' => 'required|image',
            'name' => 'required|string',
            'description' => 'required|string',
            'url' => 'required|string',
        ]);

        $project->image = $request->image;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->url = $request->url;
        $project->save();

        return response()->json($project);
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        if (!$project) {
            return response()->json(['message' => 'Projet not found'], 404);
        }

        $project->delete();
        return response()->json(['message' => 'Projet deleted'], 200);
    }
}
