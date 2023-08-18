<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkspaceRequest;
use App\Http\Requests\UpdateWorkspaceRequest;
use App\Models\Workspace;
use Carbon\Carbon;

class WorkspaceController extends Controller
{

    private const VIEW = 'module.workspace';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workspaces = Workspace::where('user_id',Auth()->id())->paginate(5);
        $view = 'index';
        return view(self::VIEW.'.index', compact('workspaces','view'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkspaceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($uuid)
    {
        $workspace = Workspace::where('user_id',Auth()->id())->whereUuid($uuid)->first();
        if(!$workspace){
            return redirect(route('workspace.index'))->withErrors('Resources Not Found');
        }
        $tasks = $workspace->tasks()->paginate();


        $view = 'show';
        return view('module.workspace.index',compact('workspace','view','tasks'));

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
