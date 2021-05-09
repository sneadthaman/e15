<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->getAllProjectsFromJsonFile();
        
    }

    private function getAllProjectsFromJsonFile()
    {
        $projectData = file_get_contents(database_path('projects.json'));
        $projects = json_decode($projectData, true);

        $count = count($projects);

        foreach ($projects as $id => $projectData) {
            $project = new Project();

            $project->created_at = Carbon::now()->subDays($count)->toDateTimeString();
            $project->updated_at = Carbon::now()->subDays($count)->toDateTimeString();

            $project->project_name = $projectData['project_name'];
            $project->cust_number = $projectData['cust_number'];
            $project->begin_date = $projectData['begin_date'];
            $project->end_date = $projectData['end_date'];
            $project->project_email = $projectData['project_email'];
            $project->complete_pct = $projectData['complete_pct'];

            $project->save();
            $count--;
        }
    }
}