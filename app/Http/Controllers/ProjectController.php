<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $project = Project::find($request->id);

        return view('project_page',['project' => $project]);
    }
}
