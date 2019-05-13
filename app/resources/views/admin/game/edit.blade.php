@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <form method="post" action="{{ route('game.update',$game->game_id) }}"
                        class="form-group forms wrapper">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label>
                                <h4>Name</h4>
                            </label>
                            <input type="text" name="name" class="form-control" value="{{ $game->name }}">
                        </div>
                        <div class="form-group">
                            <label>
                                <h4>Rating</h4>
                            </label>
                            <input type="number" name="rating" class="form-control" step="1" min="0" max="10"
                                value="{{ $game->rating }}">
                        </div>
						<div class="form-group">
                            <label>
                                <h4>Age limit</h4>
                            </label>
                            <input type="number" name="age_limit" class="form-control" step="1"
                                value="{{ $game->age_limit }}">
                        </div>
                        <div class="form-group">
                            <label>
                                <h4>Platform</h4>
                            </label>
                            <div class="qfc-container">
                                @foreach ($platform as $key => $value)
                                @if ($key%3 == 0)
                                <div class="row">
                                    <div class="col-sm">
                                    <label class="checkbox-inline"><input type="checkbox" name="platform[]"
                                        value="{{$value}}" {{$checkplatform[$key]}}>{{$value}}</label>
                                </div>
                                @elseif ($key%3 == 1)
                                <div class="col-sm">
                                    <label class="checkbox-inline"><input type="checkbox" name="platform[]"
                                        value="{{$value}}" {{$checkplatform[$key]}}>{{$value}}</label>
                                </div>
                                @elseif ($key%3 == 2)
                                <div class="col-sm">
                                    <label class="checkbox-inline"><input type="checkbox" name="platform[]"
                                        value="{{$value}}" {{$checkplatform[$key]}}>{{$value}}</label>
                                </div>
                                </div>
                                @endif
                                
                                @endforeach
</div>
                                <div class="form-group">
                                    <label>
                                        <h4>Detail</h4>
                                    </label>
                                    <input type="text" name="detail" class="form-control" value="{{ $game->detail }}">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <h4>Genre</h4>
                                    </label>
                                    <div class="qfc-container">
                                        @foreach ($genre as $key => $value)
                                        @if ($key%3 == 0)
                                <div class="row">
                                    <div class="col-sm">
                                    <label class="checkbox-inline"><input type="checkbox" name="genre[]"
                                                value="{{$value}}" {{$checkgenre[$key]}}>{{$value}}</label>
                                </div>
                                @elseif ($key%3 == 1)
                                <div class="col-sm">
                                <label class="checkbox-inline"><input type="checkbox" name="genre[]"
                                                value="{{$value}}" {{$checkgenre[$key]}}>{{$value}}</label>
                                </div>
                                @elseif ($key%3 == 2)
                                <div class="col-sm">
                                <label class="checkbox-inline"><input type="checkbox" name="genre[]"
                                                value="{{$value}}" {{$checkgenre[$key]}}>{{$value}}</label>
                                </div>
                                </div>
                                @endif
                                        
                                        @endforeach
</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <h4>Developer</h4>
                                    </label>
                                    <input type="text" name="developer" class="form-control"
                                        value="{{ $game->developer }}">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning">edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
