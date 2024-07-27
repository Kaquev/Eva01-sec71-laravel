<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(Request $request, $_id)
    {
        if ($_id === null || $request === null) {
            return "Debe ingresar un id y un request";
        }
        return "valores del id a actualizar: {$_id}";
    }
}
