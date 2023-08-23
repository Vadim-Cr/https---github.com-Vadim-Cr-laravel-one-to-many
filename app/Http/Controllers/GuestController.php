<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class GuestController extends Controller
{
    public function index() {
        $projects = Project::with('type')->get(); // Carica la relazione con il tipo
        dd($projects);
        return view('home', compact('projects'));
    }
    

}
