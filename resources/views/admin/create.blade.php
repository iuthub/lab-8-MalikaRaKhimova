@extends('layouts.admin')

@section('content')
	<h1>Create Post</h1>
	{{Form::open(array('route' => 'admin.create', 'method' => 'POST'))}}
 	<div class = "form-group">
 		{{Form::label('title', 'Title')}}
		{{Form::text('title','', ['class'=> 'form-control', 'placeholder'=> 'Title'])}} 		
 	</div>
 	<div class = "form-group">
 		{{Form::label('title', 'Content')}}
		{{Form::text('title','', ['class'=> 'form-control', 'placeholder'=> 'Title'])}} 		
 	</div>
 	<div>
 		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
 	</div>
 	@csrf
 	{!! Form::close()!!}
 	
 		
@endsection