<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TasksController;

Route::model('task','Task'); // to inject model instances into routes

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//default route and rendering home.blade
//creating a new task in the database
/*
Route::get('/', function()
 {
 $task = new Task;
 $task->title = 'Eating breakfast';
 $task->body = 'Remember to buy bread, egg and milk.';
 $task->user_id = 1;
 $task->done = 0;
 $task->save();
 return'Task created!';
 }); */

 
//linking to the todo controller contolling our tasks
Route::get('/', [TasksController::class, 'home']);
Route::get('create', [TasksController::class, 'create']);
//when we create a task let it call saveCreate action in taskscontroller
Route::post('create', [TasksController::class, 'saveCreate']);
// Route to show the edit form
// Route for showing the edit form
Route::get('tasks/{id}/edit', [TasksController::class, 'edit'])->name('tasks.edit');

// Route for submitting the edited data
Route::post('tasks/{id}/edit', [TasksController::class, 'doEdit'])->name('tasks.update');

Route::get('delete', [TasksController::class, 'delete']);





 // updating a record or an object finds it by automatically generated id

/*Route::get('/', function()
 {
 $task = Task::find(1);
$task->title = 'Eating different breakfast';
$task->body = 'Remember to buy beefsteak';
$task->save();
 return'Task updated!';
 }); */

/*destroying a model/object/task using its automatically incremental id
Route::get('/', function()
 {
Task::destroy(1); for destroying multiple instances Task::destroy(1,2,3,4);
});*/

//Retrieving an eloquent model

/*Route::get('/', function()
 {
 $task = Task::find(1);
return $task->title;
 ;
 });
 */

//about us route
Route::get('/about', function () {
    return View:: make('aboutus');
});
//Contact Us route
Route::get('/contact', function () {
    return View::make('contactus');
});

//validation of the contact's page form
Route::post('contact', function()
{
$data = Input::all();
 $rules = array(
 'subject' => 'required',
 'message' => 'required'
 );

 $validator = Validator::make($data, $rules);


 if($validator->fails()) {
 return Redirect::to('contact')->withErrors($validator)->withInput();
 }

 return 'Your message has been sent';
 });




