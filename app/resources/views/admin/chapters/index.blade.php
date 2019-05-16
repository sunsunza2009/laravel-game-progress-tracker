@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="/js/confirm.js"></script>
<style>
body {background-image:url("/images/Horizon Zero Dawn™_20190517025520.jpg");}
</style>
@section('content')
<div class="container bg-white">
	<div class="row justify-content-center">
        <div class="col-md-8"> 
			<div class="panel panel-default">
			<h1 class="text-center">{{$name}}</h1>
					          
			</div>
		   
		   <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link" href="#name" role="tab" data-toggle="tab">Add by Name</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#file" role="tab" data-toggle="tab">Add by File</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="name">
	<form method="post" action="{{ route('chapters.store') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="nameText">Name</label>
		<input type="text" name="name" class="form-control">
		<input type="hidden" name="game_id"  value="{{$id}}" class="form-control">
		<input type="hidden" name="method_add"  value="text" class="form-control">
	</div>
		<button type="submit" class="btn btn-success">Add Chapters</button>
	</form>
	</div>
	<div role="tabpanel" class="tab-pane fade" id="file">
	<form method="post" action="{{ route('chapters.store') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group">
	<label for="chapters_file">File</label>
	<input type="file" name="chapters_file" class="form-control">
	<input type="hidden" name="game_id"  value="{{$id}}" class="form-control">
	<input type="hidden" name="method_add"  value="file" class="form-control">
	</div>
	<button type="submit" class="btn btn-success">Add Chapters</button>
				</form></div>
</div>
		   
<table class="table table-bordered" >

		<tr>
            <th width="280px">chapter_id</th>
            <th width="280px">Name</th>
			 <th width="280px">Action</th>
		</tr>
@foreach($chapters as $row)		
	<tbody>
		<tr>
			<td>{{ $row->chapter_id }}</td>
			<td>{{ $row->name }}</td>	
			<td>
				<form action="{{ route('chapters.destroy',$row->chapter_id) }}" method="post" onsubmit="event.preventDefault(); check(this);">	
				<a href="{{ route('chapters.edit',$row->chapter_id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method("DELETE")
					<button class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	</tbody>
@endforeach		
</table>
        </div>
    </div>
</div>
@endsection