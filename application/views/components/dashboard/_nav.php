<nav class="navbar navbar-expand-lg">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">People</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#peopleNav" aria-controls="peopleNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse w-100 justify-content-between py-md-0 py-3" id="peopleNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<form class="d-flex m-0" role="search">
						<input class="form-control me-2" name="es" type="search" placeholder="Search from Employees" aria-label="Search">
					</form>
				</li>
			</ul>
			<ul class="navbar-nav align-items-center">
				<li class="nav-item">
					<a class="nav-link" href="#">Subscription</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" title="Settings" href="#"><i class="ti ti-settings"></i><span class="d-md-none">&nbsp;Settings</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="ti ti-settings"></i><span class="d-md-none">&nbsp;Settings</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="ti ti-circle-plus"></i><span class="d-md-none">&nbsp;Add Employee</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="ti ti-message"></i><span class="d-md-none">&nbsp;Messages</span></a>
				</li>
				<li class="nav-item">
					<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#notificationTab" aria-controls="notificationTab">
						<i class="ti ti-bell"></i>
					</button>
				</li>
				<li class="nav-item dropdown">
					<a href="" class="nav-link dropdown-toggle d-flex gap-2 align-items-center" href="#" id="userProfileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="avatar avatar-sm">SK</span>
						<div class="">
							Hemant Karekar
						</div>
					</a>
					<ul class="dropdown-menu" aria-labelledby="userProfileDropdown">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="ti ti-grid-dots"></i></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="notificationTab" aria-labelledby="notificationTabLabel">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="notificationTabLabel">Notifications</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<ul class="list-group" id="sortApps">
			<?php for ($count = 0; $count < 10; $count++) : ?>
				<li class="list-group-item">
					<div class="row -0 p-0 g-0">
						<div class="col-md">Lorem, ipsum dolor <?= $count ?></div>
						<div class="col-auto">
							<i class="ti ti-grip-vertical"></i>&nbsp;
						</div>
					</div>
				</li>
			<?php endfor ?>
		</ul>
	</div>
</div>

