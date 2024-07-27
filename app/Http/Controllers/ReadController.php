<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ReadController extends Controller
{

    public function index()
    {
        $projects = ProjectModel::all();
        return response()->json($projects);
    }
}
