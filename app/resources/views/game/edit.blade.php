@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			
                <div class="panel-heading">
				<form method="post" action="{{ route('game.update',$game->game_id) }}" class="form-group">
				@csrf
				@method("PUT")
				
				<div class="form-group">
				<label>name</label>
				<input type="text" name="name" class="form-control" value="{{ $game->name }}">
				</div>
				<div class="form-group">
				<label>rating</label>
				<input type="number" name="rating" class="form-control" max="10" value="{{ $game->rating }}">
				</div >
				<div class="form-group">
				<label>platform</label>
				<input type="text" name="platform" class="form-control" value="{{ $game->platform }}">
				</div>
				<div class="form-group">
				<label>detail</label>
				<input type="text" name="detail" class="form-control" value="{{ $game->detail }}">
				</div>
				<div class="form-group">
				<label>genre</label>
				<input type="text" name="genre" class="form-control" value="{{ $game->genre }}">
				</div>
				<div class="form-group">
				<label>developer</label>
				<input type="text" name="developer" class="form-control" value="{{ $game->developer }}">
				</div>
				
				<div class="form-group"> 
				<button type="submit" class="btn btn-default">edit</button>
				</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
