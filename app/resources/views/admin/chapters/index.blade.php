@extends('layouts.app')

@section('content')
<div class="container">
			
	<div class="row justify-content-center">
        <div class="col-md-8"> 
			<div class="panel panel-default">
		
				<form method="post" action="{{ route('chapters.store') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="nameText">Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<button type="submit" class="btn btn-success">Add Chapters</button>
				</form>
					          
			</div>
		   
<table class="table table-bordered" >

		<tr>
            <th width="280px">chapter_id</th>
            <th width="280px">Name</th>
            <th width="280px">game_id</th>
			 <th width="280px">Action</th>
		</tr>
@foreach($chapters as $row)		
	<tbody>
		<tr>
			<td>{{ $row->chapter_id }}</td>
			<td>{{ $row->name }}</td>
			<td>{{ $row->game_id }}</td>	

			<td>
				<form action="{{ route('chapters.destroy',$row->chapter_id) }}" method="post">	
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