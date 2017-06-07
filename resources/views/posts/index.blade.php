@extends('main')
@section('title','| All posts')
@section('content')
  <div clas="row">
  	<div class="col-md-8">
  		<h1>Posts</h1>
  		<table class="table">
  			<thead>
  				<tr>
  					<th>#</th>
  					<th>Name</th>		
  				</tr>
  			</thead>

  			<tbody>
  				@foreach($posts as $post)
  				<tr>
  					<th>{{$post->id}}</th>
  					<th><a href="{{route('posts.show',$post->id)}}" class="btn btn-default">{{$post->name}}</a></th>
  				</tr>
  				@endforeach
  			</tbody>	
  		</table>
  	</div>{{-- end of col-md-8 --}}

  	<div class="col-md-3">
  		<div class="well">
  			{!!Form::open(['route'=>'posts.store','method'=> 'POST'])!!}
  			<h2>New Post</h2>
  			{{Form::label('name','Name:')}}
  			{{Form::text('name',null,['class'=>'form-control'])}}
  			{{Form::submit('Create New Task',['class' => 'btn btn-primary btn-block btn-h1-spacing'])}}
  			{!!Form::close()!!}
  		</div>
  	</div>

  </div>
  @endsection