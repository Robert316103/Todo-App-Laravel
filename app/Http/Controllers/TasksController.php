<?php
 
namespace App\Http\Controllers;
use App\Models\Task; // Import the Task model

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TasksController extends Controller
{
    public function home()
    {
        
            //making homepage to return all the 
        $tasks = Task::all(); //this gets all the tasks in the db
        return View::make('home', compact('tasks')); //compact is used to create an array containing tasks variables and values

    }

    public function create()
    {
        return view('create');
    }

     // Show the edit form
    public function edit($id)
    {
        // Fetch the task by ID
        $task = Task::findOrFail($id);

        // Pass the task to the create blade
        return view('edit', compact('task'));

    }

    //action for creating a task
    public function doEdit(Request $request, $id)
    {
        
        $task = Task::findOrFail($id); // Use the $id parameter directly
        // Update the task attributes
            $task->title = $request->input('title', $task->title); // Keep existing value if not provided
            $task->body = $request->input('body', $task->body);
            $task->done = $request->input('done', $task->done);
                
            $task->save();
            return redirect()->action([TasksController::class, 'home']);
        
    }

    public function delete()
    {
        return view('delete');
    }

    //action for creating a task
    public function saveCreate(Request $request)
    {
        // Validate the form data
    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional photo validation
    ]);

    // Initialize $photoPath to null
    $photoPath = null;

    // Check if a photo is uploaded
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public'); // Store the photo and get the path
    }

    // Create the task, including the photo path if uploaded
    Task::create([
        'title' => $request->title,
        'body' => $request->body,
        'photo' => $photoPath
    ]);
      
        return redirect()->action([TasksController::class, 'home']);
        
    }

    
}
