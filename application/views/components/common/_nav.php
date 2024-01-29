<nav class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>"><?= PRODUCT_NAME ?></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#peopleNav" aria-controls="peopleNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse w-100 justify-content-between py-md-0 py-3" id="peopleNav">
			<ul class="navbar-nav align-items-center">
				<li class="nav-item">
					<a class="nav-link" title="Home" href="<?= base_url() ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">HRMS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">Payroll</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">Resources</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">Support</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">Pricing</a>
				</li>
			</ul>
			<ul class="navbar-nav align-items-center gap-3">
				<li class="nav-item">
					<a class="nav-link btn btn-primary" title="Home" href="<?= base_url('login') ?>">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link btn btn-outline-light" href="<?= base_url('register') ?>">Sign Up</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

