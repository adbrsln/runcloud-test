<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Workspace;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $stats = [
            'total_workspace' => Workspace::where('user_id',auth()->id())->count() ?? 0,
            'total_task' => Task::where('user_id',auth()->id())->count()?? 0,
            'total_completed_task' => Task::completeTask()->where('user_id',auth()->id())->count()?? 0,
            'total_incomplete_task' => Task::inCompleteTask()->where('user_id',auth()->id())->count()?? 0,
        ];
        return view('dashboard', compact('stats'));
    }
}
