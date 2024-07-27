<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function store(Request $request)
    {
        if ($request === null) {
            return "El request no puede ser nulo";
        }
        return ProjectModel::create($request->all());
    }
}
