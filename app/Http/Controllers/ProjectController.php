<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projects()
    {
        return view(projects);
    }
    public function ccfd()
    {
        return view('ccfd');
    }
    public function ucpp()
    {
        return view('ucpp');
    }
    public function fa()
    {
        return view('fa');
    }
}
