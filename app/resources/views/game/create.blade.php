@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			
                <div class="panel-heading">
				<form method="post" action="{{ route('game.store') }}" >
				{{ csrf_field() }}
				<div class="form-group">
				<label for="ACC_No">name</label>
				<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
				<label>rating</label>
				<input type="number" step="0.01" name="rating" class="form-control">
				</div>
				<div class="form-group">
				<label>platform</label>
				<input type="text" name="platform" class="form-control">
				</div>
				<div class="form-group">
				<label>detail</label>
				<input type="text" name="detail" class="form-control">
				</div>
				<div class="form-group">
				<label>genre</label>
				<input type="text" name="genre" class="form-control">
				</div>
				<div class="form-group">
				<label>developer</label>
				<input type="text" name="developer" class="form-control">
				</div>
				<div class="form-group">
				<label>picture</label>
				<input type="text" name="poster_url" class="form-control">
				</div>
				<div> 
				<button type="submit" class="btn btn-default">add game</button>
				</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
