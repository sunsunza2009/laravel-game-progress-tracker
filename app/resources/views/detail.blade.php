@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/detail.css" rel="stylesheet">
<style>
    .parallax {
        /* The image used */
        background-image: url("https://images5.alphacoders.com/438/438934.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 260px;
        
    }
    .dot {
  height: 110px;
  width: 110px;
  background-color: #ffff;
  border-radius: 50%;
  display: inline-block;
  padding-top:30px;
  padding-left:15px;
}

</style>
@section('content')


<div class="parallax">
    <!-- Heading Row -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img class="img rounded" style="width:20em;padding-top:50px"
                    src="http://henrycavill.org/images/Films/2013-Man-of-Steel/posters/3-Walmart-Superman-a.jpg" alt="">
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-7" style="padding-top:120px;padding-left:50px">
                <h1 class="font-weight-bold">{{$gamedetail->name}}</h1>
                <h3>({{$gamedetail->developer}})</h3><br><br><br>
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
            <span class="dot"><h1>{{$gamedetail->rating}}/10</h1></span>
            </div>
            </div>
            <!-- /.col-md-4 -->
        
        <!-- /.row -->
<br>
        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Chapter Name</th>
                                </tr>
                            </thead>
                            @foreach($chapterdetail as $row)
                            <tbody>
                                <tr>
                                    <td scope="row">-{{ $row->name }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>

    </div>
</div>
<!-- /.container -->


@endsection
