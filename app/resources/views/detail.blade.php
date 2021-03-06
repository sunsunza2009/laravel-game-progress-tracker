@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    .parallax {
        /* The image used */
        background-image: url("{{$first}}");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 260px;
        filter: blur(6px);
        position: relative;
        z-index: 0;
        border-style: solid;
        transform: scale(1.1);
    }
    .para {
        margin-top: -250px; 
    }
    .borderx{
        overflow: hidden;
    }
    .dot {
  height: 110px;
  width: 110px;
  background-color: #ffff;
  border-radius: 50%;
  display: inline-block;
  padding-top:25%;
}

</style>
@if (!empty($status))
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Roboto:100,300,400,500,700,900" rel="stylesheet" />
<style>
p, h1, h2, h3, h4, h5 {
    margin: 0;
}

body{
    margin: 0;
    padding: 0;
    font-weight: 400;
    font-size: 12px;
    background: #f3f3f3;
}

.error-wrapper {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.error-wrapper .title {
    font-size: 40px;
    font-weight: 700;
    color: #000;
}

.error-wrapper .info {
    font-size: 18px;
}

.home-btn, 
.home-btn:focus, 
.home-btn:hover, 
.home-btn:visited {
    text-decoration: none;
    font-size: 18px;
    color: #a92929;
    padding: 17px 77px;
    border: 1px solid #a92929;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -o-border-radius: 3px;
    border-radius: 3px;
    display: inline-block;
    margin: 20px 0;
    width: max-content;
    background-color: transparent;
    outline: 0;
}

.man-icon {
    background: url('https://www.hotstar.com/assets/b5e748831c911ca02f9c07afc11f2ae5.svg') center center no-repeat;
    display: inline-block;
    height: 100px;
    width: 118px;
    margin-bottom: 16px;
}
</style>
@endif
@section('content')

<div class="borderx">
<div class="{{ ( !empty($status) ? '' : 'parallax') }}">
</div>
</div>
    <!-- Heading Row -->
    <div class="container para">
		@if (!empty($status))
			<div class="container">
				<div class="error-wrapper">
					<div class="man-icon"></div>
					<h3 class="title">Sorry</h3>
					<p class="info">{{ $status }}</p>
					<a type="button" class="home-btn" href="/home">HOME</a>
				</div>
			</div>
        @endif
		@if (empty($status))
        <div class="row">
            <div class="col-lg-3">
                <img class="img rounded" style="width:20em;padding-top:50px"
                    src="{{$gamedetail->poster_url}}" alt="">
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-7" style="padding-top:120px;padding-left:50px">
                <h1 class="text-white font-weight-bold">{{$gamedetail->name}}</h1>
                <h3 class="text-white">({{$gamedetail->developer}})</h3><br><br><br>
                <div class="row">
                <div class="col-sm">
                <h5>Genre : </h5><h6>{{$gamedetail->genre}}</h6>
                </div>
                <div class="col-sm">
                <h5>Platform : </h5><h6>{{$gamedetail->platform}}</h6>
                </div>
                </div>
                
                <br>
            <h6>{{$gamedetail->detail}}</h6>
            </div>
            <div class="col-lg" style="padding-top:120px;padding-left:40px">
            <span class="dot"><h1 class="text-center">{{$gamedetail->rating}}/10</h1></span><br><br><br>
            @if ($isFav === 1)
            <button href="" onclick="deleteFav({{$gamedetail->game_id}})" class="btn btn-danger btn-lg">Remove</button>
            @else
            <button href="" onclick="addFav({{$gamedetail->game_id}})" class="btn btn-success btn-lg">Follow</button>
            @endif
            </div>
            </div>
            <!-- /.col-md-4 -->
        
        <!-- /.row -->
		<br>
        @if ($isFav === 1)
        <form method="post" action="{{ route('detail.store') }}">
				{{ csrf_field() }}
				<div class="form-group">
				<label><h4>Choose Chapter</h4></label>
				<select class="form-control" name="chapter_id">
                @foreach($chapterdetail as $row)
        <option value="{{ $row->chapter_id }}">{{ $row->name }}</option>
        @endforeach
      </select>
				</div>
				
				
				<input type="hidden" name="player_id" value="{{$user_id}}" style="display:none">
                <input type="hidden" name="game_id" value="{{$gamedetail->game_id}}" style="display:none">
				
				<div class="form-group">
				<label><h4>Comment</h4></label>
				<input type="text" name="comment" class="form-control">
				</div>
				<div> 
				<button type="submit" class="btn btn-success"><h4>Add progress</h4></button>
				</form>
                <div style="padding-top: 10px;"><div class="progress">
                @if (empty($lastProg))
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                            0% Game Completed!
                                        </div>             
                @endif
                @if (!empty($lastProg))
					@if ($lastProg >= 0 && $lastProg < 25 )
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="{{$lastProg}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$lastProg}}%">
					@endif
					@if ($lastProg >= 25 && $lastProg < 50 )
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="{{$lastProg}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$lastProg}}%">
					@endif
					@if ($lastProg >= 50 && $lastProg < 75 )
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="{{$lastProg}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$lastProg}}%">
					@endif
					@if ($lastProg >= 75)
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="{{$lastProg}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$lastProg}}%">
					@endif
					@if ($lastProg < 50 )
                                        <div class="text-dark">{{$lastProg}}% Game Completed!</div>
					@endif
					@if ($lastProg >= 50 )
                                        <div class="text-white">{{$lastProg}}% Game Completed!</div>
					@endif
                                        </div>             
                @endif
                </div></div>
        <table class="table" style="padding-top: 10px;">
                            <thead>
                                <tr>
                                    <th scope="col">Chapter Name</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Save Time</th>
                                </tr>
                            </thead>
                            @foreach($progress as $row)
                            <tbody>
                                <tr>
                                    <td scope="row">{{ $row->chapter_id }}</td>
                                    <td scope="row">{{ $row->comment }}</td>
                                    <td scope="row">{{ $row->last_play_time }}</td>
                                    <td>
                                        <form action="{{ route('detail.destroy',$row->progress_id) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
        @endif
		@endif
    </div>

<!-- /.container -->
<script>
//var images=new Array('https://images5.alphacoders.com/438/438934.jpg','http://eskipaper.com/images/bioshock-infinite-screenshot-1.jpg','http://www.glittergraphics.org/img/113/1137019/bioshock-infinite-wallpaper-1920x1080.jpg','http://www.glittergraphics.org/img/113/1137022/bioshock-infinite-wallpaper-1920x1080.jpg','http://www.glittergraphics.org/img/113/1137033/bioshock-infinite-wallpaper-1920x1080.png','http://www.glittergraphics.org/img/113/1137059/bioshock-infinite-wallpaper-1920x1080.jpg','http://www.glittergraphics.org/img/113/1137068/bioshock-infinite-wallpaper-1920x1080.jpg','http://www.glittergraphics.org/img/113/1137094/bioshock-infinite-wallpaper-1920x1080.jpg');
var images=new Array(@foreach ($otherPic as $o)
@if ($loop->last)
"{{$o->url}}"
@else    
"{{$o->url}}",
@endif  
@endforeach);
var i=0;
function changePic(){
	if(i >= images.length)
		i = 0;
	$(".parallax").css('background-image','url('+images[i]+')');		
	i++;
}
setInterval(changePic,5000);
function deleteFav(id){
	
		$.get( "/api/fav/"+id+"/del", function( data ) {
			console.log(data);
			location.reload(); 
		});
}
function addFav(id){
	
		$.get( "/api/fav/"+id+"/add", function( data ) {
			console.log(data);
			location.reload(); 
		});
}
</script>

@endsection
