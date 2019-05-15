@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			
                <div class="panel-heading">
				<form method="post" action="{{ route('game.store') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
				<label><h4>Name</h4></label>
				<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
				<label><h4>Rating</h4></label>
				<input type="number" step="1" name="rating"  min="0" max="10" class="form-control">
				</div>
				<div class="form-group">
                            <label>
                                <h4>Age limit</h4>
                            </label>
                            <input type="number" name="age_limit" class="form-control" step="1">
                        </div>
				<div class="form-group">
				<label><h4>Platform</h4></label>
				<div class="qfc-container">
                            <div class="row">
							<div class="col-sm">
								<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="PC">PC</label>
							</div>
							<div class="col-sm">
								<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="PS1">PS1</label>
							</div>
								<div class="col-sm">
								<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="PS2">PS2</label>
								</div>
							</div>
							<div class="row">
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="PS3">PS3</label>
							</div>
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="PS4">PS4</label>
							</div>
								<div class="col-sm">
								<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="XBOX One">XBOX One</label>
								</div>
							</div>
							<div class="row">
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="XBOX 360">XBOX360</label>
							</div>
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="Nintendo Switch">Nintendo Switch</label>
							</div>
								<div class="col-sm">
								<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="Nintendo 3DS">Nintendo 3DS</label>
								</div>
							</div>
							</div>
				</div>
				<div class="form-group">
				<label><h4>Detail</h4></label>
				<input type="text" name="detail" class="form-control">
				</div>
				<div class="form-group">
				<label><h4>Genre</h4></label>
				<div class="qfc-container">
							<div class="row">
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="RPG">RPG</label>
							</div>
							<div class="col-sm">
                            <label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Shooter">Shooter</label>
							</div>
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Action">Action</label>
							</div>	
							</div>
							<div class="row">
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Fighting">Fighting</label>
							</div>
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Adventure">Adventure</label>
							</div>
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Sports">Sports</label>
							</div>
							</div>
							<div class="row">
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Racing">Racing</label>
							</div>
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Strategy">Strategy</label>
							</div>
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Mucsic/Rhythm">Music/Rhythm</label>
							</div>
							</div>
							<div class="row">
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Puzzle">Puzzle</label>
							</div>
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Board Games">Board Games</label>
							</div>
							<div class="col-sm">
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Arcade">Arcade</label>
							</div>
							</div>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Unique">Unique</label>
							</div>
				</div>
				<div class="form-group">
				<label><h4>Developer</h4></label>
				<input type="text" name="developer" class="form-control">
				</div>
				<div class="form-group">
				<label><h4>Picture</h4></label>
				<input type="file" name="poster_url" class="form-control">
				</div>
				<div> 
				<button type="submit" class="btn btn-success"><h4>Add game</h4></button>
				</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
