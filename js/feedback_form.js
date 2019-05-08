jQuery(document).ready(function($) {
	$("#contact").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "http://exiragor.pw/anoft/feedback_form.php",
			data: str,
			success: function(msg) {
				//if(msg == 'OK') {
				//	result = '<div class="ok">Сообщение отправлено</div>';
				//	$("#fields").hide();
			//	}
			//	else {result = msg;}
				$('#note').html(msg);
				if (msg == 'MESSAGE HAS BEEN SENT') {
				    $('input, textarea').val('')
				}
			}
		});
		return false;
	});
});
