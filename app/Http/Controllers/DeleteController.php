<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id)
    {
        if ($id === null) {
            return "El id no puede ser nulo";
        }
        return "el id eliminado es: $id";
    }
}
