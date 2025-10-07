<?php

namespace App\Http\Controllers\Client;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Http\Controllers\Controller;

class ProjectPageController extends Controller
{
        public function index(){
        $projectCategories = ProjectCategory::whereHas('projects')->active()->sorting()->get();
        $projects = Project::whereHas('category', function($query){
            $query->where('active', 1);
        })->active()->sorting()->get();

        return view('client.blades.portfolio', compact('projects', 'projectCategories'));
    }
}
