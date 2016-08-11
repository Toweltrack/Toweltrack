$(function() {
	
	// Every time a modal is shown, if it has an autofocus element, focus on it.
	$('.modal').on('shown.bs.modal', function() {
	  $(this).find('[autofocus]').focus();
	});
	
	// Get the form.
	var form = $('#get-info');
	
	// Get the messages div.
	var formMessages = $('#form-messages');
	
	$(form).submit(function(e) {
		e.preventDefault();
		
		// Serialize the form data.
		var formData = $(form).serialize();
		
		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
		  url: $(form).attr('action'),
		  data: formData
		}).done(function(response) {
			
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).addClass('alert');
	    $(formMessages).removeClass('alert-danger');
	    $(formMessages).addClass('alert-success');
	
			// Remove the form fields
	    $('.form-group').hide();
	    
	    $('.modal-footer').hide();
	
			// Set the message text.
			$(formMessages).hide().text(response).fadeIn(600);
	    
		}).fail(function(data) {
			
	    // Make sure that the formMessages div has the 'error' class.
	    $(formMessages).addClass('alert');
	    $(formMessages).removeClass('alert-success');
	    $(formMessages).addClass('alert-danger');
	
	    // Set the message text.
	    if (data.responseText !== '') {
	      $(formMessages).text(data.responseText);
	    } else {
	      $(formMessages).text('Oops! An error occured and your message could not be sent.');
	    }
	    
		}); // end ajax
		
	}); // end submit
	
}); 