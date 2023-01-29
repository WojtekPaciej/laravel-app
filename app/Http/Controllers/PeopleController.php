<?php

namespace App\Http\Controllers;


use App\Http\Resources\PostResource;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB;
use App\Models\People;

class PeopleController extends Controller
{
    
    public function store(People $people): JsonResponse
    {
        return response()->json($people, 201);
    }

    public function show(People $people): JsonResponse
    {
        return response()->json($people, 200);
    }

    public function update(People $people): JsonResponse
    {
        return response()->json($people, 201);
    }

    public function delete(People $people): JsonResponse
    {
        return response()->json($people, 204);
    }

    public function index(): JsonResponse
    {
        return response()->json(People::all(), 200);
    }
}