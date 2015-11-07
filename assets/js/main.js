$(function(){	
	$('[data-toggle="tooltip"]').tooltip();	

	if ($('.container-anim').length){ 
		setTimeout(function(){
			$('.container-anim').removeClass('container-fadeout');
		},100);
	}
});