@extends('main')
@section('title', "| $post->name ")

@section('content')
	<div class="row">
	<div class="col-md-8">
	<h1>{{$post->name}} </h1>
	
	</div>
	<div class="col-md-2 ">
		<a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary pull-right btn-block" style="margin-top:20px" style = "margin-top:20px;">Edit</a>
	</div>
	<div class="col-md-2">
		{{Form::open(['route' => ['posts.destroy',$post->id],'method' => 'DELETE'])}}
		{{Form::submit('Delete',['class' => 'btn btn-danger btn-block','style'=>'margin-top:20px'])}}
		{{Form::close()}}
	</div>		
	</div>

	
@endsection