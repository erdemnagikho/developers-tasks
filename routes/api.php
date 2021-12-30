<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DeveloperController;

Route::get('tasks/assigned', [DeveloperController::class, 'listAssignedTasks']);


