<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    
     public function create()
    {
        return view('tasks.create'); // shows the form
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'description' => 'nullable|string|max:1000',
        ]);

        \App\Models\Task::create($validated);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }
    
    
    
    
    
    

    

    
    




   
public function destroy($id)
{
    Task::findOrFail($id)->delete();
    return redirect()->route('tasks.index')->with('success', '$Task deleted successfully!');
}
   public function edit($id)
{
    $task = Task::findOrFail($id);
    return view('tasks.edit', compact('task'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $Task = Task::findOrFail($id);
    $Task->update(['name' => $request->name]);

    return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
}
 
}
