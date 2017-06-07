@extends('main')
@section('title','| All Tasks')
@section('content')
  <div clas="row">
  	<div class="col-md-8">
  		<h1>Posts</h1>
  		<table class="table">
  			<thead>
  				<tr>
  					<th>Name</th>		
  				</tr>
  			</thead>

  			<tbody>

  				@foreach($posts as $post)

           <tr>
           <td>
           <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-id= "$post->id"
            data-title= "{{$post->name}}"
            data-target="#favoritesModal">
            {{$post->created_at}}
          </button>
          </td>
          </tr>
          



          <div class="modal fade" id="favoritesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Post</h4>
                </div>
                  <div class="modal-body">
                  <p>
                   
                  <b><span id="fav-title"></span></b> 
                  
                  </p>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <span class="pull-right">
                  
                  </span>
                  </div>
              </div>
            </div>
          </div>

  				<tr>
  					
  					{{-- <th>{{$post->name}}</th> --}}
  				</tr>
  				@endforeach
  			</tbody>	
  		</table>
  	</div>{{-- end of col-md-8 --}}

  </div>
  @endsection

  @section('scripts')
    <script src="{{ asset('/js/modal.js') }}"></script> 
  @endsection