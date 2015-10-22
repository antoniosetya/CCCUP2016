$(document).scroll(function() {
	if ($(this).scrollTop() < 77) {
		$(".nav").css({"position" : "relative",
		"background-color" : "rgba(255,49,38,1)",
		"box-shadow" : "none"});
		$(".nav").hover(function() {
			$(this).css({"background-color" : "rgba(255,49,38,1)"});
		});
    } else if ($(this).scrollTop() >= 77) {
		/* FLOATING MENU BAR PROPERTY */
		$(".nav").css({"position" : "fixed",
		"background-color" : "rgba(255,49,38,0.5)",
		"box-shadow" : "0px 0px 10px rgba(0,0,0,1)"});
		$(".nav").hover(function() {
			$(this).css({"background-color" : "rgba(255,49,38,1)"});
		}, function() {
			$(this).css({"background-color" : "rgba(255,49,38,0.5)"});
		});
    }
});
$(".index").click(function(){
   window.location.href="main.php"; 
});
$(".competitions").click(function(){
    window.location.href="competitions.php";
});
$(".news").click(function(){
    window.location.href="news.php";
});
$(".registration").click(function(){
    window.location.href="./pendaftaran";
})
$(".contact").click(function(){
	window.location.href="contact.php";
});