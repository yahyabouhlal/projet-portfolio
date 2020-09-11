
	 // Progress bars
     $(document).scroll(function() {
      $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    });

    $(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.app, .icon, .logo, .web'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});

 
 
	