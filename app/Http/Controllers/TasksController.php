<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\TaskService;
use App\Models\Task;

class TasksController extends Controller
{
    protected $taskservice;
    public function __construct(TaskService $taskservice)
    {
        $this->taskservice = $taskservice;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index',['AllTasks'=>$this->taskservice->getAllTask(),
        'TaskNotComplete'=>$this->taskservice->getAlltaskNotComplete(),
        'TaskCompleted'=>$this->taskservice->getAlltaskCompleted()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateFormRequest $request)
    {
        // dd($request->input());
        $this->taskservice->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            return view('tasks.task_detail',['task'=>$this->taskservice->task_detail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('tasks.task_edit',['task'=>$this->taskservice->task_detail($id)]);
    }
    public function edit_post(CreateFormRequest $request,string $id)
    {
        $task=$this->taskservice->edit_task($request,$id);
        return view('tasks.task_edit',['task'=>$task]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {

        $this->taskservice->updateComplete($id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->taskservice->deleteTask($id);
        return redirect()->back();
    }
}
