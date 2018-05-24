$(document).ready(function(){
	$(".logo_main").mouseover(function(){$(".logo_main").css("box-shadow", "0 0 40px 4px #FFFF00");});
	$(".logo_main").mouseout(function(){$(".logo_main").css("box-shadow", "none");});
	
	
});

$(document).ready(function(){
	$(".zagl").click(function(){
		$(".logo_main").slideToggle(3000);});
	});