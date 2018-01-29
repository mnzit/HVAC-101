jQuery(function($) {
  
    if($(window).width()>990){
        $('.navbar .dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

        });

    }

    // all cases
    
    	$('.navbar .dropdown > a').click(function(){
            location.href = this.href;
            return false;
 	    });
 

        $('.navbar .dropdown > a').append("<span class='nav-dropdown-arrow'><i class='fa fa-caret-down' aria-hidden='true'></i></span>");

		$('.nav-dropdown-arrow').on('click', function(e){

			$(this).closest('li').find('.dropdown-menu').first().slideToggle();
			return false;

        });
});
