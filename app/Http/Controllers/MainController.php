<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function homepage()
    {
        $projects = Project::get();
        return view('pages.homepage', compact('projects'));
    }
}
