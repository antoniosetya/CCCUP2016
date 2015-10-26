<div id='cssmenu'>
<ul>
   <li><a href='./'><span class="ui-icon-home ui-btn-icon-left">Home</span></a></li>
   <li><a href='about.php'><span class="ui-icon-question-circle ui-btn-icon-left">About</span></a>
   <li><a href='competitions.php'><span class="ui-icon-external-link3 ui-btn-icon-left">Competitions</span></a>
   <li><a href='news.php'><span class="ui-icon-list-alt ui-btn-icon-left">News</span></a></li>
   <li class='last'><a href='contact.php'><span class="ui-icon-user ui-btn-icon-left">Contact</span></a></li>
</ul>
</div>

<script>
( function( $ ) {
$( document ).ready(function() {
$('#cssmenu').prepend('<div id="menu-button">CC CUP XIV 2016</div>');
	$('#cssmenu #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});
});
} )( jQuery );
</script>