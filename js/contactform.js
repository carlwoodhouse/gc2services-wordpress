// Contact form jquery goodness

var messageDelay = 5000;  // How long to display status messages (in milliseconds)

$(".submit-contactform").click(function() {
	var form = $(this).parents("#contactForm");	
	var valid = true;
	
	// all the text inputs, validate
	$(form).find('input:text').each(function(index) {
		if($(this).val() == '')
		{
			valid = false;
    	}
	});
	
	// text area validate
	if($(form).find("textarea").val() == '')
	{
		valid = false;
	}
	
	var html5Throw = !valid;
	
	if(valid)
	{	
		$('#contact-sending').fadeIn();
	    form.fadeOut();
			
		$.ajax( {
	      url: form.attr( 'action' ) + "?ajax=true",
	      type: form.attr( 'method' ),
	      data: form.serialize(),
	      success: submitFinished
	    } );
	}
	
	if(html5Throw)
	{
		valid = false;
	}
	
  	return !valid;
});

// Handle the Ajax response
 
function submitFinished( response ) {
  response = $.trim( response );
  var form = $("#contactForm");	
  $('#contact-sending').fadeOut();

  // yay it worked
  if ( response == "success" ) {
	 $('#contact-success').fadeIn().delay(messageDelay).fadeOut();
	 $(form).find('input:text').each(function(index) {
		$(this).val("");
	 });
	
	 $(form).find("textarea").val("");

	 	$('#contactForm').delay(messageDelay+500).fadeIn();
  } else {
	// oh no, it failed
    $('#contact-failed').fadeIn().delay(messageDelay).fadeOut();
	$('#contactForm').delay(messageDelay+500).fadeIn();
  }
}