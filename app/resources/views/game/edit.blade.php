@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <form method="post" action="{{ route('game.update',$game->game_id) }}" class="form-group">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $game->name }}">
                        </div>
                        <div class="form-group">
                            <label>Rating</label>
                            <input type="number" name="rating" class="form-control" step="1" min="0" max="10"
                                value="{{ $game->rating }}">
                        </div>
                        <div class="form-group">
                            <label>Platform</label>
                            <div>
							@foreach ($platform as $key => $value)
                                <label class="checkbox-inline"><input type="checkbox" name="platform[]"
                                        value="{{$value}}" {{$checkplatform[$key]}}>{{$value}}</label>
							@endforeach
                            </div>
							<label class="checkbox-inline"><input type="checkbox" name="platform[]"
                                        value="{{$platform[1]}}" >{{$platform[1]}}</label>
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <input type="text" name="detail" class="form-control" value="{{ $game->detail }}">
                        </div>
                        <div class="form-group">
                            <label>Genre</label>
                            <div>
							@foreach ($genre as $key => $value)
                                <label class="checkbox-inline"><input type="checkbox" name="genre[]"
                                        value="{{$value}}" {{$checkgenre[$key]}}>{{$value}}</label>
							@endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Developer</label>
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
