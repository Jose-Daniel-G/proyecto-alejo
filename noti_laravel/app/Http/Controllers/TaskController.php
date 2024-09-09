<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TaskController extends Controller
{
    public function index()
    {
    }
    public function create()
    // public function save_task(Request $request)
    {
        // dd($request['title']);
        // $task = new Task;
        // $task->title = $request['title'];
        // $task->description = $request['description'];
        // $title = $request->title;

        // $message = new Message;
        // $message->from = Auth::user()->id;
        // $id = $message->from;
        // $message->message = $title;
        // $message->save();

        // if($task->save()) {
        //     return response()->json(['status' => true, 'message' => 'Task Added Successfully']);
        // }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Crear una nueva tarea
        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();

        // Retornar respuesta JSON si se guarda correctamente
        return response()->json(['status' => true, 'message' => 'Task added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
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
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
