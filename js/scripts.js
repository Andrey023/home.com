$(document).ready(function(){
	$(".logo_main").mouseover(function(){$(".logo_main").css("box-shadow", "0 0 40px 4px #FFFF00");});
	$(".logo_main").mouseout(function(){$(".logo_main").css("box-shadow", "none");});
	// $("p").click(function(){
	// 		$("p").addClass("color");
	// 	});
	
});

$(document).ready(function(){
	$("button.see_about").click(function(){
		$("#about").load("about_text.txt");
	});
});