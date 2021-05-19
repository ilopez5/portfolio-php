<nav class="navbar navbar-expand-sm navbar-dark my-navbar">
	<div class="container">
		<a class="navbar-brand" href="/"><?=$site_name;?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar">
			<div class="navbar-nav mr-auto">
				<a class="nav-item nav-link <?= $active_home;?>" href="/">Home</a>
				<a class="nav-item nav-link <?= $active_resume;?>" href="/resume" title="Resume">Resume</a>
				<a class="nav-item nav-link <?= $active_portfolio;?>" href="/portfolio" title="Portfolio">Portfolio</a>
				<a class="nav-item nav-link <?= $active_contact;?>" href="/contact" title="Contact">Contact</a>
			</div>
		</div>
	</div>
</nav>
