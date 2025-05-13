@extends('layout')
@section('content')
<h1>Contact Us.</h1>

<section class="header section-padding">
 	<div class="background">&nbsp;</div>
 		<div class="container">
		 	<div class="header-text">
 				<p>Contact Us</p>
				 	
 			</div>
 		</div>
 </section>

<p>Please contact us by sending a message using the form below:</p>
{{ Form::open(array('url' => 'contact'))}}
{{ Form::label('Subject') }}
{{ Form::text('subject','Enter your subject')}}
<br />
{{ Form::label('Message') }}
{{ Form::textarea('message','Enter your message')}}
<br />
{{ Form::submit() }}
{{ Form::close() }}

{{ Html::ul($errors->all(), array('class'=>'errors'))}}

@stop