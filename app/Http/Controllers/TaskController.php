<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Model\Task;
use App\Model\User;
use App\Repositories\TaskRepositories;

class TaskController extends Controller
{

    protected $task;


    // Make this Controller only accessible for authenticated user
    // This will allow every request to the controller
    public function __construct(TaskRepositories $tasks)
    {
        $this->middleware('auth');
        $this->task = $tasks;

    }



    // Display the Available Tasks
    public function todo(Request $request){
        // $todo = Task::orderBy('created_at','asc')->get();
        // return view('auth.todo',['todo'=>$todo]);
        $todo = $this->task->forUser($request->user());
        return view('auth.todo',['todo'=>$todo]);
    }



    // Store the tasks
    public function addtask(Request $request){
        $validator = $request->validate([
            'name'=>'required|string|max:255'
        ]);

        if(!$validator){
            return redirect('todo')->withInput()->withErrors($validator);
        }

        // dd($request->user()->id);

        Task::create([
            'user_id'=>$request->user()->id,
            'name'=>$request->name
        ]);

        return redirect('todo')->withSuccess('Added Successfully');
    }



    // Delete the Tasks
    public function remove($num){
       if(!Auth::check()){
        return redirect('/todo')->withErrors('error','unauthorised access');
       }

       $task = Task::find($num);

       if(!$task){
        return redirect('/todo')->withErrors('error','No Task Found');
       }

       $task->delete();
       return redirect('/todo')->withSuccess('Task Successfully Deleted');
    }

    public function create(){
        return view('common.404');
    }
}
