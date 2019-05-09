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
				<input type="number" step="1" name="rating"  min="0" max="10" class="form-control">
				</div>
				<div class="form-group">
				<label>platform</label>
				<div>
                            
                            <label class="checkbox-inline"><input type="checkbox" name="platform[]" value="PC">PC</label>
                            <label class="checkbox-inline"><input type="checkbox" name="platform[]" value="PS1">PS1</label>
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="PS2">PS2</label>
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="PS3">PS3</label>
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="PS4">PS4</label>
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="XBOX One">XBOX One</label>
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="XBOX 360">XBOX360</label>
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="Nintendo Switch">Nintendo Switch</label>
							<label class="checkbox-inline"><input type="checkbox" name="platform[]" value="Nintendo 3DS">Nintendo 3DS</label>
							</div>
				</div>
				<div class="form-group">
				<label>detail</label>
				<input type="text" name="detail" class="form-control">
				</div>
				<div class="form-group">
				<label>genre</label>
				<div>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="RPG">RPG</label>
                            <label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Shooter">Shooter</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Action">Action</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Fighting">Fighting</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Adventure">Adventure</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Sports">Sports</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Racing">Racing</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Strategy">Strategy</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Mucsic/Rhythm">Music/Rhythm</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Puzzle">Puzzle</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Board Games">Board Games</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Arcade">Arcade</label>
							<label class="checkbox-inline"><input type="checkbox" name="genre[]" value="Unique">Unique</label>
							</div>
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
