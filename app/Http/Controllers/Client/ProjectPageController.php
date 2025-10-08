<?php

namespace App\Http\Controllers\Client;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Http\Controllers\Controller;

class ProjectPageController extends Controller
{
    public function portfolio(){
            $projectCategories = ProjectCategory::whereHas('projects')->active()->sorting()->get();
            $projects = Project::whereHas('category', function($query){
                $query->where('active', 1);
            })->active()->sorting()->get();            

        return view('client.blades.portfolio', compact('projects', 'projectCategories'));
    }
    public function project($slug = null){

        if ($slug) {
            $project = Project::whereHas('category', function($query){
                $query->where('active', 1);
            })->where('slug', $slug)->active()->first();

            $relatedProjects = Project::whereHas('category', function($query){
                $query->where('active', 1);
            })->where('project_category_id', $project->project_category_id)
            ->where('id', '<>', $project->id)->active()->sorting()->get();
        }else{
            
        }
        
        return view('client.blades.project', compact('project','relatedProjects'));
    }
}
