@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
			   
				<form method="post" action="{{ route('chapters.update',$chapters->chapter_id) }}" class="form-group">
				@csrf
				@method("PUT")
				
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" value="{{ $chapters->name }}">
						<input type="hidden" name="game_id" class="form-control" value="{{ $chapters->game_id }}">
					</div>
				
					<div align="right"> 
						<button type="submit" class="btn btn-warning">Edit</button>				
					</div>
				</form>
        </div>
    </div>
</div>
@endsection
