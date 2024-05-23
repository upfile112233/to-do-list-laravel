<?php
namespace App\Http\Services;

use App\Models\Task;
use Carbon\Carbon;

class TaskService{



    public function create($request)
    {
        try{
            Task::create(
            [
                'title'=>(string)$request->title,
                'due_date'=>Carbon::parse($request->due_date),
                'description'=>(string)$request->description,
            ]
        );
        session()->flash('success','thêm task thành công');
        }
        catch(\Exception $e)
        {
            session()->flash('error',$e->getMessage());
            return false;
        }
        return true;
    }

    public function getAllTask()
    {
        return Task::orderby('id','desc')->get();
    }


    public function getAlltaskNotComplete()
    {
        return Task::where('is_completed',0)->orderby('id','desc')->get();
    }


    public function getAlltaskCompleted()
    {
        return Task::where('is_completed',1)->orderby('id','desc')->get();
    }


    public function updateComplete(string $id)
    {
        try{
            $task=Task::find($id);
            if($task)
            {
                $task->is_completed=1;
                $task->save();
            }
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }
        return true;
    }


    public function deleteTask(string $id)
    {
        try{
            $task=Task::find($id);
            if($task)
            {
                $task->delete();
            }
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }
        return true;
    }

    public function task_detail(string $id)
    {
        try{
            $task=Task::find($id);
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }
        return $task;
    }
    public function edit_task($request,$id)
    {
        try{
            $task=Task::find($id);
            if($task)
            {
                $task->fill($request->input());
                $task->save();
            }
        session()->flash('success','chỉnh sửa thành công');
        }
        catch(\Exception $e)
        {
            session()->flash('error',$e->getMessage());
            return $e->getMessage();
        }
        return $task;
    }
}
