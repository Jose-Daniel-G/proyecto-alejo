<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class TaskController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $task = new Task;
        $task->title = $request['title'];
        $task->description = $request['description'];
        $title = $request->title;
        $message = new Message;
        // dd($message);
        $message->from = Auth::user()->id;
        $id = $message->from;
        $message->message = $title;
        $message->save();

        $options = array(
            'cluster' => 'sa1',
            'useTLS' => true
        );


        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $id];
        $pusher->trigger('my-channel', 'my-event', $data);

        if($task->save()) {
            return response()->json(['status' => true, 'message' => 'Task Added Successfully']);
        }
    }


    public function show(Task $task)
    {
        //
    }

 
    public function edit(Task $task)
    {
        //
    }
    public function update(Request $request, Task $task)
    {
        //
    }
    public function destroy(Task $task)
    {
        //
    }
}
