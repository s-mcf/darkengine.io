var started = false;

$(document).ready(function(){
	$("#begin").click(function () {
		if(!started){
			started = true;
			$("#kyoku").trigger("play");
			rotate_init();
		}
	});
});
