$('document').ready(function() {
	console.log("hello jquery");
	$.material.init();

	//Function which allows only the entry numbers
	$('.justNumbers').keypress(function(e){
		var keynum = window.event ? window.event.keyCode : e.which;
   		if ((keynum == 48) || (keynum == 56))
        	return true;
    	return /\d/.test(String.fromCharCode(keynum));
	});

	//Function which allows only the entry floats
	$('.justFloats').keypress(function(e){
		var keynum = window.event ? window.event.keyCode : e.which;
   		if ((keynum == 46) || (keynum == 56))
        	return true;
    	return /\d/.test(String.fromCharCode(keynum));
	});
	//Function to convert lowercase to uppercase
	$('.toUpper').keyup(function() {
		 $(this).val($(this).val().toUpperCase());
	});

	//Function to enable an input according to the value of a select
	$('#graduation').change(function(e) {
		if (e.currentTarget.value >= 10){
			$('#register').removeAttr('disabled');
		}
		if(e.currentTarget.value < 10){
			$('#register').attr('disabled', true).val("");;
		}
	});
 
});
		
   