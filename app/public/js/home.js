function init() {
	clear_list();
	$.get( "/api/fav", function( data ) {
		if(data.length > 0){
			for(var i=0;i<data.length;i++){
				add_list(data[i],platform(data[i]['platform']),"Remove",false);
			}
		} else {
			$("#alert").html('<div class="alert alert-danger" role="alert">Please add some game.</div>');
			$.get( "/api/game", function( data ) {
				for(var i=0;i<data.length;i++){
					add_list(data[i],platform(data[i]['platform']),"Follow",true);
				}
			});		
		}
	});
}
function clear_list(){
	$("#alert").html("");
	$("#list").empty();
}
function add_list(data,platform_html,bt_txt,first){

	$("#list").append(	'<div class="card" style="width: 18rem;">'+
								'<img class="card-img-top" src="'+data['poster_url']+'">'+
								'<div class="card-body">'+
								'<h5 class="card-title">'+data['name']+'</h5>'+
								'<p class="card-text">'+data['detail'].substring(0, 100)+'...</p>'+
								'<a href="#" class="card-link float-right" onclick="viewDetail('+data['game_id']+')"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a><br>'+
								'</div>'+
								'<div class="card-footer bg-transparent">'+
								'<ul class="list-unstyled list-inline font-small">'+
								'<li class="list-inline-item">'+platform_html+'</li>'+
								'</ul>'+
								'</div>'+								
								'</div>');
}
function platform(data){
	var platform = data.split(",");
	var platform_html = "";
	for(var j=0;j<platform.length;j++){
		platform_html = platform_html + '<img src="/icon/platform/'+platform[j]+'.png" alt="'+platform[j]+'" title="'+platform[j]+'" style="max-width:32px;max-height:32px;padding-right: 5px;">';
	}
	return platform_html;
}
function viewDetail(id){
	//$.get( "/api/detail/"+id);
	window.location.href = "/detail/"+id;
}
$( document ).ready(function() {
	console.log("Ready");
	init();
});