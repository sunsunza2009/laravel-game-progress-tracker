@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
		
				<form method="post" action="">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div align="right"> 
					<button type="submit" class="btn btn-success">Add</button>
					</div>
				</form>
					          
			</div>
		</div>
	</div>
</div>
@endsection
