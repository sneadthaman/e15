<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function list()
    {
        $projects = Project::all();
        dd($projects);

        return view('pages/list', ['projects' => $projects]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                "project_name" => "required|max:50",
                "cust_number" => "required",
                "begin_date" => "required|date",
                "end_date" => "required|date",
                "project_email" => "required|email",
                "complete_pct" => "required|integer"
            ]
        );

        $project = new Project();

        $project->project_name = $request->project_name;
        $project->cust_number = $request->cust_number;
        $project->begin_date = $request->begin_date;
        $project->end_date = $request->end_date;
        $project->project_email = $request->project_email;
        $project->complete_pct = $request->complete_pct;

        $customer = Customer::findByCustNum($project->cust_number);

        $slug = $customer->slug;
        $project->save();

        return redirect('/projects')->with(['flash-alert' => 'Project was added']);
    }
}