@extends('main')
@section('title',"| Edit Posts")
@section('content')
	
 		{{Form::model($post,['route' =>['posts.update', $post->id],'method' => "PUT"])}}
		{{Form::label('name',"Title:")}}
		{{Form::text('name',null,
		['class' => 'form-control'])}}

		{{Form::submit('Save Changes',['class' => 'btn btn-success','style' => 'margin-top:20px'])}}
		{{Form::close()}}
@endsection