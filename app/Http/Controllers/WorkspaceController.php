<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkspaceRequest;
use App\Http\Requests\UpdateWorkspaceRequest;
use App\Models\Workspace;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;

class WorkspaceController extends Controller
{

    private const VIEW = 'module.workspace.index';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workspaces = Workspace::where('user_id',Auth()->id())->paginate(5);
        $view = 'index';
        return view(self::VIEW, compact('workspaces','view'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $view = 'create';
        return view(self::VIEW, compact('view'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkspaceRequest $request)
    {
        $workspace = new Workspace();
        $workspace->name = $request->name;
        $workspace->description = $request->description;
        $workspace->user_id = auth()->id();
        $workspace->save();
        return redirect()->route('workspace.show',['workspace' => $workspace]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Workspace $workspace)
    {
        if (!Gate::allows('view', $workspace)) {
            return redirect(route('workspace.index'))->withErrors('Resources Not Found');
        }
        $tasks = $workspace->tasks()->where('user_id',Auth()->id())->paginate();

        $view = 'show';
        return view(self::VIEW,compact('workspace','view','tasks'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workspace $workspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkspaceRequest $request, Workspace $workspace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workspace $workspace)
    {
        //
    }
}
