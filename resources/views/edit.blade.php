@extends('layout')
@section('content')

 <section class="header section-padding">
 	<div class="background">&nbsp;</div>
 		<div class="container">
		 <div class="header-text">
 			<h1>Edit</h1>
				 <p>
				 Edit tasks page
				 </p>
 			</div>
 		</div>
 </section>
 	<div class="container">
 		<section class="section-padding">
 			<div class="jumbotron text-center">
 				<h1>Edit Task {{ $task->id }}</h1>

 					<form action="{{ url('tasks/' . $task->id . '/edit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" class="form-control" rows="5" required>{{ $task->body }}</textarea>
        </div>
        <div class="form-group">
            <label for="done">Done</label>
            <select id="done" name="done" class="form-control">
                <option value="0" {{ $task->done == 0 ? 'selected' : '' }}>Not Done</option>
                <option value="1" {{ $task->done == 1 ? 'selected' : '' }}>Done</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save Changes</button>
        <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>


 </div>
 </section>
</div>
@stop
