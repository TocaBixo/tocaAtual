$(document).ready(function() {	

	$('a[name=login]').click(function(e) {
		e.preventDefault();
		
		var id = $(this).attr('href');
	
		var maskHeight = $(document).height();
		var maskwidth = $(window).width();
                var maskTop = 100;
	
		$('#mask').css({'width':maskwidth,'height':maskHeight,'margin-top':maskTop});

		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		$(id).fadeIn(2000); 
	
	});
	
	$('.window .close').click(function (e) {
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});	
        
        $('.window2 .close2').click(function (e) {
		e.preventDefault();
		
		$('#mask').hide();
		$('.window2').hide();
	});	
	
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});