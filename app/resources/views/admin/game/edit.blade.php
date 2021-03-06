@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
  
  <style type="text/css">
body{background-image:url("/images/Horizon Zero Dawn™_20190517024807.jpg")}

input[type=file]{

  display: inline;

}


#image_preview img{

  width: 200px;

  padding: 5px;

}

</style>
@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <form method="post" action="{{ route('game.update',$game->game_id) }}"
                        class="form-group forms wrapper" enctype="multipart/form-data">
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
                                    <textarea rows="3" name="detail" class="form-control">{{ $game->detail }}</textarea>
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
				<label><h4>Poster</h4></label><br>
				<input type="file" id="image" name="poster_url" multiple class="form-control">
				</div>
                <div id="image_previewx"><img src="{{$game->poster_url}}" width="50%"></div>
                                <div class="form-group">
                                <br>
				<label><h4>Other Picture</h4></label><br>
				<input type="file" id="image" name="image[]" multiple class="form-control">
				</div>
                <input type="hidden" name="delImage" id="delImage" class="form-control">
                <div id="image_preview">
                @foreach ($image as $key => $value)
                <div id="{{$value->img_id}}">
                <img src="{{$value->url}}">
                <button type="button" class="btn btn-danger" onclick="DelPic({{$value->img_id}})">delete Picture</button>
                </div>
                @endforeach
                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning">Edit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script>
function DelPic(picId) {
    $( "div" ).remove("#"+picId);
    $("#delImage").val($("#delImage").val()+picId+",");
}
</script>