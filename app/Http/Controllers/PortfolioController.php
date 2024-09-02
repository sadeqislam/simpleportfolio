<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function workExperiences()
    {
        $data = $this->getData('work-experiences.json');
        return view('work-experiences', compact('data'));
    }

    public function projects()
    {
        $projects = $this->getData('projects.json');
        return view('projects', compact('projects'));
    }

    public function projectDetails($id)
    {
        $projects = $this->getData('projects.json');
        $project = collect($projects)->firstWhere('id', $id);
        return view('project-details', compact('project'));
    }

    private function getData($filename)
    {
        $path = storage_path("data/{$filename}");
        if (File::exists($path)) {
            return json_decode(File::get($path), true);
        }
        return [];
    }
}
