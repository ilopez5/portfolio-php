<div class="container-fluid my-footer">
	<footer class="footer">
		<div class="row pad-top-dbl">
			<div class="col-md-12">
				<div class="row justify-content-center">
					<div class="col-xs-1 icon-pad text-center">
						<a href="<?= $github; ?>">
							<i class="fa fa-github icons"></i>
						</a>
					</div>
					<div class="col-xs-1 icon-pad text-center">
						<a href="<?= $twitter; ?>">
							<i class="fa fa-twitter icons"></i>
						</a>
					</div>
					<div class="col-xs-1 text-center">
						<a href="<?= $linkedin; ?>">
							<i class="fa fa-linkedin icons"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="text-center pad-top pad-bot-dbl">
					&copy; <?= $year; ?> &middot; <a href="<?= $mailto; ?>"><?= $site_name; ?></a> &middot; All rights reserved.
				</div>
			</div>
		</div>
	</footer>
</div>
<?php
	include "js.php";
	ob_end_flush();
?>

</body>
</html>