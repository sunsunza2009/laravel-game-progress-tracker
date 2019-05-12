@extends('layouts.app')

@section('content')
<script>
function init() {
	clear_list();
	$.get( "/api/game", function( data ) {
		for(var i=0;i<data.length;i++){
			console.log(data[i]);
			var platform = data[i]['platform'].split(",");
			var platform_html = "";
			for(var j=0;j<platform.length;j++){
				platform_html = platform_html + '<img src="/icon/platform/'+platform[j]+'.png" style="max-width:32px;max-height:32px;padding-right: 5px;">';
			}			
			add_list(data[i],platform_html);
		}
	});
}
function clear_list(){
	$("#list").empty();
}
function add_list(data,platform_html){
	$("#list").append(	'<div class="card" style="width: 18rem;">'+
								'<img class="card-img-top" src="http://henrycavill.org/images/Films/2013-Man-of-Steel/posters/3-Walmart-Superman-a.jpg">'+
								'<div class="card-body">'+
								'<h5 class="card-title">'+data['name']+'</h5>'+
								'<p class="card-text">'+data['detail']+'</p>'+
								'<a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>'+
								'</div>'+
								'<div class="card-footer bg-transparent">'+
								'<ul class="list-unstyled list-inline font-small">'+
								'<li class="list-inline-item">'+platform_html+'</li>'+
								'</ul>'+
								'</div>'+								
								'</div>');
}
function doclick(){
	alert();
}
$( document ).ready(function() {
	console.log("Ready");
	init();
});
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="card-columns" id="list">
		5s4a5s4a5s4
		</div>
    </div>
</div>
@endsection
