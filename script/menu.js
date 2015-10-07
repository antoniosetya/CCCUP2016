$(document).scroll(function() {
	if ($(this).scrollTop() < 77) {
		$(".nav").css({"position" : "relative",
		"background-color" : "rgba(0,0,255,1)",
		"box-shadow" : "none"});
		$(".nav").hover(function() {
			$(this).css({"background-color" : "rgba(0,0,255,1)"});
		});
    } else if ($(this).scrollTop() >= 77) {
		/* FLOATING MENU BAR PROPERTY */
		$(".nav").css({"position" : "fixed",
		"background-color" : "rgba(0,0,255,0.5)",
		"box-shadow" : "0px 0px 10px rgba(0,0,0,1)"});
		$(".nav").hover(function() {
			$(this).css({"background-color" : "rgba(0,0,255,1)"});
		}, function() {
			$(this).css({"background-color" : "rgba(0,0,255,0.5)"});
		});
    }
});