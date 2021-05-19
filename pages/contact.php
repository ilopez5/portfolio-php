<?php
	if ($id == "Email")
		return sendGrid($_REQUEST);
?>
<div class="container-fluid marg-bot">
	<div class="row next-page banner pad-top pad-bot">
		<div class="col text-center">
			<h1>Contact</h1>
			<div class="sub-heading">Send me an email</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 right-line">
			<h3 class="sub-line pad-top text-center">Contact Info</h3>
			<h4 class="pad-top text-center">
				Email:
				<a class="a-alt" href="<?= $mailto; ?>">
					email@ismaeljlopez.com
				</a>
			</h4>
		</div>
		<div class="col-md-8">
			<h3 class="sub-line pad-top text-center">Direct Contact</h3>
			<div id="js-alert"></div>
			<div class="alert alert-danger text-center" role="alert">
				Direct Contact is currently disabled. Try sending a  
				<a class="a-alt" href="<?=$twitter;?>">Twitter DM</a>
			</div>
			<form class="form-horizontal pad-top" id="sendMsg">
				<div class="form-group">
					<label class="control-label col-sm-2" for="fname">First Name</label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="first" id="fname" placeholder="Your first name&hellip;" required disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="lname">Last Name</label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="last" id="lname" placeholder="Your last name&hellip;" required disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="subject">Subject</label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject&hellip;" required disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="sender">Your Email</label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="sender" id="sender" placeholder="(Optional) Your email address&hellip;" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="message">Message</label>
					<div class="col-sm-12">
						<textarea class="form-control" name="msg" id="message" placeholder="Compose message&hellip;" style="height:160px;" required disabled></textarea><br>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12 text-center">
						<button type="button" id="Email" name="email" onclick="sendMsg()" class="btn btn-email" disabled>Send Email</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
