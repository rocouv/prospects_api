<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestProspect;
use App\Models\Prospect;
use Illuminate\Http\JsonResponse;

class ProspectController extends Controller
{
    //
    public function store(FormRequestProspect $request): JsonResponse
    {
        $prospect = Prospect::create($request->validated());
        return response() -> json([
            "message" => "Prospecto creado exitosamente",
            "data" => $prospect,
        ], 201);
    }
}
