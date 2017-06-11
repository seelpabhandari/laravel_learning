<?php
	
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Task;
use Carbon\Carbon;


class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index(){

    	$tasks=Task::latest()
        ->filter(request(['month','year']))
        ->get();

       

 


        return view('tasks.index',compact('tasks'));
    }


    public function show(Task $task) //changes from ($id) = Route model binding
    {
    	//$task=Task::find($id)
    return view('tasks.show',compact('task'));
    }

    public function create()
    {


    return view('tasks.create');
    }

    public function store()
    {
        //create a new task using request data
     /*   $task = new Task ;
        $task->title= request('title');
        $task->body=request('body');
          $task->save();
*/
        //firstly we have to validate the form
          $this->validate(request(),[
            'title'=> 'required',
            'body'=> 'required'
            ]); 

        Task::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'user_id'=>auth()->user()->id
            ]);
        //save it to the database

        session()->flash(
            'message','your post has been published'
            );

        //redirect to the homepage
        return redirect('/');
    }

  
}


