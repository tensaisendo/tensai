<!--
$(document).ready(function(){

	$("header form input.search-field").focusin(function(){
			$(this).css("width","168px");
	});
	
	$("header form input.search-field").focusout(function(){
		$(this).css("width","0");
	});

});