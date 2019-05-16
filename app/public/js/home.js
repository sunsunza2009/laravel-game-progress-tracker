function init() {
	clear_list();
	$.get( "/api/fav", function( data ) {
		if(data.length > 0){
			$("h2").html("My Game");
			for(var i=0;i<data.length;i++){
				add_list(data[i],platform(data[i]['platform']),"Remove",false);
			}
		} else {
			$("h2").html("Game List");
			$("#alert").html('<div class="alert alert-danger" role="alert">Please add some game.</div>');
			$.get( "/api/game", function( data ) {
				for(var i=0;i<data.length;i++){
					add_list(data[i],platform(data[i]['platform']),"Follow",true);
				}
			});		
		}
	});
}
function search(el){
	if($(el).val() == "nyancat"){
		Swal.fire({
		  title: 'Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan',
		  width: 600,
		  padding: '3em',
		  background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
		  backdrop: `
			rgba(0,0,123,0.4)
			url("https://sweetalert2.github.io/images/nyan-cat.gif")
			center left
			no-repeat
		  `
		}).then((result) => {
			if (result.value) {
				init();
			}
		});
	}
	if($(el).val() != ""){
		clear_list();
		$("h2").html("Game List");
		$.get( "/api/search/"+$(el).val(), function( data ) {
			for(var i=0;i<data.length;i++){
				add_list(data[i],platform(data[i]['platform']),"Follow",true);
			}
		});
	} else {
		init();
	}
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
function ChangeBG() {
	var d = new Date();
	var n = d.getHours();
	console.log(n);
	if(n >= 3 && n < 8){
		$('main').addClass("morning");
		$("h2").css("color","#c2280d");
	}
	if(n >= 8 && n < 15){
		$('main').addClass("day");
		$("h2").css("color","#874027");
	}
	if(n >= 15 && n < 17){
		$('main').addClass("evening");
		$("h2").css("color","#7d4e3d");
	}
	if(n > 17){
		$('main').addClass("night");
		$("h2").css("color","#FFFFFF");
	}
}
$( document ).ready(function() {
	console.log("Ready");
	init();
	ChangeBG();
});