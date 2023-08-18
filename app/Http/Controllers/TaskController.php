<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\Workspace;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;

class TaskController extends Controller
{
    private const VIEW = 'module.task.index';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::orderBy('status')->where('user_id',Auth()->id())->paginate(5);
        $view = 'index';
        return view(self::VIEW, compact('tasks','view'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Workspace $workspace)
    {
        if (!Gate::allows('view', $workspace)) {
            return redirect(route('workspace.index'))->withErrors('Resources Not Found');
        }
        $view = 'create';
        return view(self::VIEW, compact('view','workspace'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {

        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->start = $request->start;
        $task->end = $request->end;
        $task->status = 'incomplete';
        $task->user_id = auth()->id();
        $task->workspace_id = $request->workspace_id;
        $task->save();

        return redirect()->route('workspace.show',['workspace' => $task->workspace]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        if (!Gate::allows('view', $task)) {
            return redirect(route('task.index'))->withErrors('Resources Not Found');
        }

        $view = 'show';
        return view(self::VIEW,compact('task','view'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Task $task,UpdateTaskRequest $request)
    {
        if (Gate::allows('update', $task)) {
            if($task->status === 'incomplete'){
                $task->status = 'completed';
                $task->completed_at = Carbon::now();
            }else{
                $task->status = 'incomplete';
            }
            $task->save();
        }
    return redirect()->route('task.show', ['task' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
