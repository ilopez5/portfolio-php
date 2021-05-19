function sendMsg()
{
	var fname   = $('#fname').val();
	var lname   = $('#lname').val();
	var subject = $('#subject').val();
	var sender  = $('#sender').val();
	var msg     = $('#message').val();
	$.ajax({
		type	: "POST",
		url		:	"/contact/" + type + "/<?=time();?>",
		data	:
			{
				fname   : fname,
				lname   : lname,
				subject : subject,
				sender  : sender,
				msg     : msg
			},
		success	: function(){
			$("#sendMsg").trigger("reset"); // resets form
			bsAlert("Email sent successfully!", "success", "#js-alert");
		},
		error 	: function(error) {
			bsAlert("Email failed to send!", "danger", "#js-alert");
			console.log(error);
		}
	})
}


// for triggering alert banner
function bsAlert(message, type, tag)
{
	var div =
	`
	<div class="alert alert-`+type+` alert-dismissible text-center" role="alert">
		`+ message +`
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	`
	$(tag).html(div);
}