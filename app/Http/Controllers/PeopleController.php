<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
    
    public function index()
    {
        return response()->json(People::all(),200);
    }

    public function create(Request $request)
    {
        $people = People::create($request->all());

        return response()->json([
            "success" => true,
            "message" => "People create successfully",
            "data" => $people
        ], 201);
    }
    public function show(People $people): JsonResponse
    {
        $people = People::find($people);

        if (is_null($people))
        return $this->sendError('People not found');

        return response()->json([
            "success" => true,
            "message" => "People showed successfully",
            "data" => $people
        ], 200);
    }

    public function update(Request $request, People $people): JsonResponse
    {
        $people->update($request->all());

        return response()->json([
            "success" => true,
            "message" => "People updated successfully",
            "data" => $people
        ], 200);

    }

    public function delete(People $people)
    {
        $people->delete();

        return response()->json([
            "success" => true,
            "message" => "People deleted successfully",
            "data" => $people
        ], 200);
        
    }
}
