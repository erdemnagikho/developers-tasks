<?php

namespace App\Http\Controllers\api;

use App\Models\Developer;
use App\Http\Controllers\Controller;
use App\Http\Resources\DeveloperResource;

class DeveloperController extends Controller
{
    public function listAssignedTasks()
    {
        $developers = Developer::query()
            ->with('tasks')
            ->get();

        return DeveloperResource::collection($developers);
    }
}
