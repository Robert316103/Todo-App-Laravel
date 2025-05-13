@extends('layout')
@section('content')

<section class="header">
	<div class="background">&nbsp;</div>
		<div class="container">
			<div class="header-text">
						<h1>My TODO List</h1>
							 <p>
							 This is my to do list
							 <br />I Am Using Laravel Framework!
							 </p>
							 </div>


			</div>
			
		</div>

</section>

		<div class="container">
				<section class="section-padding">
					<div class="jumbotron text-center">
						<div class="panel panel-default">
								 <div class="panel-heading">
									 <h1>
									 <span class="grey">Our</span> To-do List
									 </h1>
								 </div>

								 @if ($tasks->isEmpty())
								 <p> Currently, there is no task!</p>
								 @else
								 <table class="table">
								 	<thead>
								 		<tr>
								 			<th>#</th>
											<th>Title</th>
											 <th>Body</th>
											 <th>Finished?</th>
								 		</tr>
								 	</thead>

								 	<tbody>
									@foreach($tasks as $task)
								 		<tr>
								 			<td>{{ $task->id }} </td>
								 			<td>{{ $task->title }}</td>
								 			<td>{{ $task->body}}</td>
								 			<td>{{ $task->done ? 'Yes' : 'No'}}</td>
								 			<td><img src="{{ asset('storage/' . $task->photo) }}" alt="Uploaded Photo" width="100"></td>

								 			<!--creating a column with edit and delete button links-->

											<td>
												 <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-info">Edit</a>

												<a href="#"class="btn btn-info">Delete</a>
											 </td>

								 		</tr>
								 @endforeach
								 	</tbody>
								 </table>
								 @endif
							</div>
						</div>
				</section>
			</div>
								 
 				

 							<div class="jumbotron text-center">
									 <div class="row">
										<div class="showcase-box col-md-4">
									 		<div class="showcase-item">
									 			<img src="img/icon1.png" />
													 <p>
													 Always learn new thing in Coding!
													 </p>
									 		</div>
									 	</div>
									 <div class="showcase-box col-md-4">
											<div class="showcase-item">
												 <img src="{{ asset('img/icon2.png') }}" />
												 <p>
												 Web applications 
												 </p>
									 			</div>
									</div>
									 
									 <div class="showcase-box col-md-4">
									 	<div class="showcase-item">
											 <img src="{{ asset('img/icon3.png') }}" />
											 <p>
											 Coding is life
											 </p>
										 </div>
									 </div>
									 </div>

 				</section>
 </div>

@stop
